<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Repository\ImageRepository")
 * @ORM\HasLifecycleCallbacks()
 */

class Image
{
    /**
    * @ORM\OneToOne(targetEntity="OC\PlatformBundle\Entity\Advert", inversedBy="image")
    */
     private $advert;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    private $file;

    // On ajoute cet attribut pour stocker le nom du fichier temporairement
    private $tempFilename;
    
    /**
    * @ORM\Column(name="title", type="string", length=255)
    * @ORM\JoinColumn(nullable=true)
    */
    private $title;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Image
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function getFile()
    {
        return $this->file;
    }

    /**
    * On modifie le setter pour prendre en compte le fait qu'il peut exister des fichiers dupliqués
    */

    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;

        //On verifie si on avait un fichier pour cette entité
        if(null !== $this->url)
        {
            //On sauvegarde l'extension du fichier pour le supprimer plutard
            $this->tempFilename = $this->url;

            //On réinitialise les attributs alt et url
            $this->url = null;
            $this->alt = null;
        }
    }

    /**
    * @ORM\PrePersist()
    * @ORM\PreUpdate()
    */
    public function preUpload()
    {
        //Si jamais il n'y a pas de fichier
        if(null == $this->file)
        {
            return;
        }

        // Le nom du fichier est son id, on doit juste stocker également son extension
       // Pour faire propre, on devrait renommer cet attribut en « extension », plutôt que « url » mais c'est pas grave, sachez que url contient l'extension du fichier
        $this->url = $this->file->guessExtension();

        // Et on génère l'attribut alt de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute
        $this->alt = $this->file->getClientOriginalName();

        //De même que pour le title
        $this->title = $this->file->getClientOriginalName();

    }

    /**
    * @ORM\PostPersist()
    * @ORM\PostUpdate()
    */
    public function upload()
    {
        //SI jamais, il n'y a pas de fichier
        if(null == $this->file)
        {
            return;
        }

         // Si on avait un ancien fichier, on le supprime
            if (null !== $this->tempFilename) {
              $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
              if (file_exists($oldFile)) {
                unlink($oldFile);
              }   
       

    }
    // On déplace le fichier envoyé dans le repertoire de notre choix
    $this->file->move(
        $this->getUploadRootDir(), //Le repertoire de destinaton
        $this->id.'.'.$this->url // Le nom du fichier à créer, ici id.extension
        );
}
   
    /**
    * @ORM\PreRemove()
    */
    public function preRemoveUpload()
     {
        // On sauvegarde temporairement le nom du fichier, car il dépend de l'id
        $this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
    }

      /**
       * @ORM\PostRemove()
       */
      public function removeUpload()
      {
        // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
        if (file_exists($this->tempFilename)) {
          // On supprime le fichier
          unlink($this->tempFilename);
        }
      }

    public function getUploadDir()
    {
        //On retourne le chemin relatif vers l'image pour un navigateur(relatif au repertoire /web donc)

        return 'uploads/img';
    }

     protected function getUploadRootDir()
      {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
      }

    public function getWebPath()
      {
        return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
      }

    /**
     * Set advert
     *
     * @param \OC\PlatformBundle\Entity\Advert $advert
     *
     * @return Image
     */
    public function setAdvert(\OC\PlatformBundle\Entity\Advert $advert = null)
    {
        $this->advert = $advert;

        return $this;
    }

    /**
     * Get advert
     *
     * @return \OC\PlatformBundle\Entity\Advert
     */
    public function getAdvert()
    {
        return $this->advert;
    }
}
