<?php

namespace OC\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CourseController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCCourseBundle:Course:index.html.twig');
    }
}
