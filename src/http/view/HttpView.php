<?php
/**
 * This file is part of SoloProyectos common library.
 *
 * @author  Gonzalo Chumillas <gchumillas@email.com>
 * @license https://github.com/soloproyectos-php/http-controller/blob/master/LICENSE The MIT License (MIT)
 * @link    https://github.com/soloproyectos-php/http-controllers
 */
namespace soloproyectos\http\view;

/**
 * Abstract base class of views.
 *
 * @package View
 * @author  Gonzalo Chumillas <gchumillas@email.com>
 * @license https://github.com/soloproyectos-php/http-view/blob/master/LICENSE The MIT License (MIT)
 * @link    https://github.com/soloproyectos-php/http-view
 */
abstract class HttpView
{
    /**
     * Gets the document.
     * 
     * @return mixed
     */
    abstract public function getDocument();
}
