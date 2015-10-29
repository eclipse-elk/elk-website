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
  <div class="block-box block-box-classic">
    <h3>Work in Progress</h3>
    <div class="content">
      <p>
        This guide is very much work in progress.
        We're posting intermediate versions in the hope
        that they may already be useful to people,
        but there may be problems and big gaps.
        We're working on it.
        You've been warned!
      </p>
    </div>
  </div>

  <h1>Getting Started</h1>
  <p>
    Autoamtic layout can be a complex thing,
    but starting to use the <em>Eclipse Layout Kernel</em>
    can be as easy as installing a few features from our update site.
    So let's get right on with it.
  </p>

  <h2>Installing Necessary Things</h2>
  <p>
    First off,
    you will have to actually install ELK.
    Head over to <a href="./downloads.php">our downloads page</a>
    and paste the URL of our update site into your Eclipse installation.
    You will discover four features:
  </p>
  <ul>
    <li>
      The core feature contains the basic layout kernel infrastructure.
      This one you definitely need to install.
    </li>
    <li>
      Depending on what technology your editor is based on,
      you may be lucky enough to find
      that we have already done much of the work necessary
      to make your editor work with ELK.
      We provide out-of-the-box interfaces
      for GMF- and Graphiti-based editors
      (the latter usually needs more customization than the former, though).
    </li>
    <li>
      You may want to use the <a href="http://www.graphviz.org/">Graphviz</a>
      library of layout algorithms.
      Installing the corresponding feature allows ELK
      to use that library if it's installed on your computer.
    </li>
  </ul>


  <h2>Connecting Your Editor to ELK</h2>
  <p>
    Congratulations, you have just installed ELK!
    (wasn't that hard, I know&hellip;)
    Now it's time to actually enable automatic layout for your editor.
  </p>


  <h2>Customizing Automatic Layout</h2>
  <p>
    Chances are that the layouts you're getting at this point
    are not perfect for your kind of diagram.

  </p>
</div>
<!-- ./end  #midcolumn -->
