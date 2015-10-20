<?php
/*******************************************************************************
 * Copyright (c) 2014 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Christopher Guindon (Eclipse Foundation) - Initial implementation
 *******************************************************************************/
?>

<!-- Main content area -->
<div id="midcolumn">
  <h1><?php print $pageTitle;?></h1>
  <p class="lead">
    Ever feel like you spend most of your time
    getting a diagram&rsquo;s layout right
    instead of its content?
  </p>
  <p>
    Visual languages are popular for visualizing concepts and systems.
    However, just being graphical in nature does not automatically make a diagram easy to understand.
    Its usefulness much rather depends on the placement of its elements, that is: on its layout.
    Getting the layout right is labour intensive and time consuming
    and can be made a lot easier by making algorithms do the work.
    The <em>Eclipse Layout Kernel (ELK)</em> provides such layout algorithms,
    as well as an infrastructure to connect them to diagram editors.
  </p>
  <p>
    To get started using automatic layout,
    a developer usually only has to provide a transformation
    that produces an ElkGraph and applies the computed layout results back to his editor.
  </p>
  <!-- TODO There needs to be a picture here of a bad and a good layout. -->

  <div class="block-box block-box-classic">
    <h3>We're Just Getting Started&hellip;</h3>
    <div class="content">
      <p>
        The Eclipse Layout Kernel
        used to be the <em>KIELER Infrastructure for Meta Layout (KIML)</em>
        and was a part of the <a href="http://rtsys.informatik.uni-kiel.de/kieler">KIELER</a> project.
        We've just started becoming <em>ELK</em>,
        so everything you see here is still very much work in progress.
        If you need automatic layout <strong>right now</strong>,
        you should head over to the KIELER project
        while we're getting ELK ready for the public.
      </p>
    </div>
  </div>


  <h2>The Parts of ELK</h2>
  <p>
    The Eclipse Layout Kernel consists of two parts:
  </p>
  <ol>
    <li>
      The kernel itself provides the basic infrastructure that connects editors with layout algorithms.
      Part of that is the <em>ElkGraph</em>,
      a data structure used to pass diagrams to the layout algorithms
      and receive the layout information computed by the algorithms.
    </li>
    <li>
      The actual layout algorithms.
      Different layout algorithms specialize in different kinds of diagrams and layout problems.
      We also provide connections to popular layout libraries.
    </li>
  </ol>


  <!-- TODO Add a slide show of sample applications here. -->
  <!--      Sample applications can be the Ptolemy Viewer, SCCharts, and the OpenKieler projects. -->
  <!--      Perhaps some industry partners may want to contribute samples as well later? -->
</div>
<!-- ./end  #midcolumn -->
