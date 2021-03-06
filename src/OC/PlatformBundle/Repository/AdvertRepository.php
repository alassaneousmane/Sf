<?php

namespace OC\PlatformBundle\Repository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * AdvertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdvertRepository extends \Doctrine\ORM\EntityRepository

{
	// Recherche ajax avec critère de recherche
	public function getAdvertWithCriteria($criteria)
	{
		$criteria = '%'. $criteria. '%';
		$qb = $this
					  ->createQueryBuilder('a')					  
					  ->where('a.title LIKE :criteria OR a.author LIKE :criteria OR a.content LIKE :criteria')
					  ->setParameter('criteria', $criteria)
					  ;
		$qb->setMaxResults(2);

		return $qb->getQuery()->getResult();
	}


	// Recherche des annonces avec au moins une candidature
	public function getAdvertAndApplications($days)
	{
		$qb = $this
					  ->createQueryBuilder('a')
					  ->leftJoin('a.applications', 'app')
					  ->addSelect('app')
					  ->andWhere('a.applications IS EMPTY')					  
					  ;
		$qb->andWhere('a.date > :days')
		   ->setParameter('days', new \Datetime(date('Y').'-02-'.$days))
		   ;

		return $qb->getQuery()->getResult();
	}


	public function getAdverts($page, $nbPerPage)
	{
		$query = $this->createQueryBuilder('a')
					  //Jointure sur l'attribut image
					  ->leftJoin('a.image', 'i')
					  ->addSelect('i')
					  //Jointure sur l'attribut $categories
					  ->leftJoin('a.categories', 'c')
					  ->addSelect('c')
		              ->orderBy('a.date', 'DESC')
		              ->getQuery()
		              ;


		  $query
		  		//On définit l'annonce à partir de laquelle commencer la liste
		  		->setFirstResult(($page -1) * $nbPerPage)
		  		//Ainsi que le nombre d'annonces à afficher par page
		  		->setMaxResults($nbPerPage)
		  		;


		 //On retourne l'objet Paginator correspond à la requête construite
		  		
		 return new Paginator($query, true); 
	}


	//Recherche des annonces déjà publiées
	public function getAdvertPublished($limit)
	{
		$qb = $this->createQueryBuilder('a');
		$qb->andWhere('a.published = :published')
		   ->setParameter('published', 1)
		   ->setMaxResults($limit)
		   ->orderBy('a.date', 'DESC')
		   ;

		return $qb->getQuery()->getResult();
	}


	//La condition "annonces postées avant l'année en cours" sera très utilisée
	//Faisons-en une méthode
	public function whereCurrentYear(QueryBuilder $qb)
	{
		$qb->andWhere('a.date BETWEEN :start AND :end')
		   ->setParameter('start', new \Datetime(date('Y').'-01-01'))
		   ->setParameter('end', new \Datetime(date('Y').'-12-31'))
		   ;

	}

	//Je redefinis de nouveau la méthode findAll()
	public function myFindAll()
	{
		//1ère méthode pour créer le queryBuilder :
		//$queryBuilder = $this->_em->createQueryBuilder()
						//	->select('a')
						//	->from($this->_entityName, 'a');
		//Dans un repository, $this->_entityName correspond au namespace de l'entité gérée
		//Ici, il vaut donc OC\PlatformBundle\Entity\Advert
		//2ème méthode : en passant par le racccourci
		//$queryBuilder = $this->createQueryBuilder('a'); //a :: alias

		//On récupère la Query à partir du QueryBuilder
		//$query = $queryBuilder->getQuery();
		//On récupère les résultats à partir de la query
		//$results = $query->getResul();

		//On retourne les résultats
		//return $results;	

		return $this->createQueryBuilder('a')
					->orderBy('a.date' , 'DESC')
					->getQuery()
					->getResult()
					;

	}

	public function listAdvertOussou()
	{
		//Les méthodes find($id), findBy(), findOneBy, findByX, findOneByX
		//sont des méthodes magiques 
		//à ne pas utiliser avec les méthodes du queryBuilder()
		return $this->createQueryBuilder('a')
					//->findBy(array('author' => 'OussouToure'),
					//	     array('date' => 'desc'),
					//	     20,
					//	     0
					//	     )
					//à ne pas utiliser avec queryBuilder()
					->getQuery()
					->getResult()
					;
	}
	public function myFindOne($id)
	{
		$qb = $this->createQueryBuilder('a');

		$qb
			->where('a.id = :id')
			->setParameter('id', $id)
			;
		return $qb
					->getQuery()
					->getResult()
					;
	}

	//Récupère toutes les annonces écrites par un auteur avant une année donnée
	public function findByAuthorAndDate($author, $year)
	{
		$qb = $this->createQueryBuilder('a');

		$qb->where('a.author = :author')
		   ->setParameter('author', $author)
		 #  ->andWhere('a.date < :year')
		 #  ->setParameter('year', $year)
		   ->orderBy('a.date', 'DESC')
		   ;
		 //j'applique la condition
		   $this->whereCurrentYear($qb);

		return $qb->getQuery()->getResult();
	}
	

	public function myFind()
	{
		$qb = $this->createQueryBuilder('a');

		//On ajoute ce que l'on veut à ce niveau
		$qb->where('a.author = :author')
		   ->setParameter('author', 'Marine')
		   ;
		//On applique notre condition sur le QueryBuilder
		$this->whereCurrentYear($qb);

		//On peut ajouter ce que l'on veut après
		$qb->orderBy('a.date', 'DESC');

		return $qb
				 ->getQuery()
				 ->getResult()
				 ;

	}

	//Utilisation de DQL
	public function myFindAllDQL()
	{
		$query = $this->_em->createQuery('SELECT a FROM OCPlatformBundle:Advert a');
		//Ira récupérer tous les attributs de l'annonce
		//On n'a pas le droit de sélectionner une à une les attributs d'entité
		$results = $query->getResult();

		return $results;
	}

	//Les jointures avec QueryBuilder
	public function getAdvertWithApplications()
	{
		$qb = $this
					->createQueryBuilder('a')
					->leftJoin('a.applications', 'app')
					->addSelect('app')
					;
		$qb->orderBy('a.date', 'DESC');

		return $qb->getQuery()->getResult();
	}

	/**
	* On souhaite toutes les annonces d'une categorie donnée
	*/
	public function getAdvertWithCategories(array $categoryNames)
	{
		$qb = $this->createQueryBuilder('a');
		//On fait une jointure avec l'entité Category avec c comme alias
		$qb->innerJoin('a.categories', 'c')
		   ->addSelect('c')
		   ;

		 //Puis on filre sur le nom de catégories avec un IN
		   $qb->where($qb->expr()->in('c.name', $categoryNames));

		   //Enfin, on retourne le résultat
		   return $qb->getQuery()->getResult();
	}
}
