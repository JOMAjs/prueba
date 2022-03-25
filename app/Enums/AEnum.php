<?php

namespace App\Enums;

abstract class AEnum

{



    /**

     *

     * @var integer

     */

    protected $id = NULL;



    /**

     *

     * @var string

     */

    protected $description = NULL;



    /**

     *

     * @var string

     */

    protected $assistant = NULL;



    /**

     *

     * @var string

     */

    protected $auxiliar = NULL;

    /**

     *

     * @var string

     */

    protected $auxiliar2 = NULL;

    /**

     *

     * @var string

     */

    protected $auxiliar3 = NULL;




    public function __construct($id, $description, $assistant = NULL, $auxiliar = NULL, $auxiliar2 = NULL, $auxiliar3 = NULL)

    {

        $this->description = $description;

        $this->assistant = $assistant;

        $this->auxiliar = $auxiliar;

        $this->auxiliar2 = $auxiliar2;

        $this->auxiliar3 = $auxiliar3;

        $this->id = $id;

    }


    public function getId()

    {

        return $this->id;

    }


    public function getDescription()

    {

        return $this->description;

    }


    public function getAssistant()

    {

        return $this->assistant;

    }


    public function getAuxiliar()

    {

        return $this->auxiliar;

    }



    public function getAuxiliar2()

    {

        return $this->auxiliar2;

    }



    public function getAuxiliar3()

    {

        return $this->auxiliar3;

    }



    public function setId($id)

    {

        $this->id = $id;

    }


    public function setDescription($description)

    {

        $this->description = $description;

    }


    public function setAssistant($assistant)

    {

        $this->assistant = $assistant;

    }





    public function setAuxiliar($auxiliar)

    {

        $this->auxiliar = $auxiliar;

    }



    public function setAuxiliar2($auxiliar)

    {

        $this->auxiliar2 = $auxiliar;

    }

  

    public function setAuxiliar3($auxiliar)

    {

        $this->auxiliar3 = $auxiliar;

    }

}