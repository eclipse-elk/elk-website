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
  <h1>Getting Started</h1>
  <p>
    Autoamtic layout can be a complex thing,
    but starting to use the <em>Eclipse Layout Kernel</em>
    can be as easy as installing a few features from our update site.
    This guide will help get you started with ELK.
    While we will mostly be focussing
    on adding automatic layout to GMF-based editors,
    much of it will apply to other technologies as well.
    So let's dive right in!
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
      for GMF- and Graphiti-based editors.
      The one for GMF works well without customization for many editors,
      while the one for Graphiti often needs more work.
    </li>
    <li>
      While ELK comes with a number of layout algorithms,
      you may also want to use the <a href="http://www.graphviz.org/">Graphviz</a> library.
      Installing the corresponding feature allows ELK
      to use Graphviz if it is installed on your computer.
    </li>
  </ul>


  <h2>Connecting Your Editor to ELK</h2>
  <p>
    Congratulations, you have just installed ELK!
    (wasn't that hard, I know&hellip;)
    Now it's time to actually enable automatic layout for your editor.
    How this is done exactly differs
    depending on the technology your editor is based on.
  </p>
  <p>
    ELK works with a graph data structure
    called the KGraph.
    To enable layout,
    it needs to know how to extract the KGraph
    corresponding to the diagram the current editor shows.
    This is done by looking for an IDiagramLayoutManager
    registered for the current editor
    and asking it to provide the KGraph.
  </p>
  <p>
    What exactly you need to do
    to connect ELK to your editor
    depends on the technology your editor is based on.
  </p>

  <h3>GMF-Based Editors</h3>
  <p>
    If your editor is GMF-based,
    you probably won't be having a hard time:
    ELK already supports GMF-based editors out of the box.
    In fact,
    there will be a new layout button on the tool bar.
    Click it (or press Ctrl+R, L)
    to check if everything works.
  </p>

  <h3>Graphiti-Based Editors</h3>
  <p>
    If your editor is based on Graphiti,
    you're in a similar situation
    as the GMF people:
    it may just work out of the box.
    However,
    the GraphitiDiagramLayoutManager that comes with ELK
    may not always make the right choices.
    In fact,
    you will most likely need to subclass it
    to customize how exactly the KGraph is built,
    and then register it with ELK
    so your custom manager is used for your editor.
    See the next section for how that is done.
  </p>

  <h3>Custom Editors</h3>
  <p>
    If your editor is based on some other technology,
    ELK doesn't have a pre-built layout connection for you;
    you will have to build it yourself.
    To do so,
    create a class <a href="http://rtsys.informatik.uni-kiel.de/confluence/pages/viewpage.action?pageId=328078#InfrastructureforMetaLayout%28KIML%29-ConnectingDiagramEditors">that implements the IDiagramLayoutManager interface</a>.
    Your class needs to be registered with ELK:
  </p>
  <pre>
    &lt;extension
       point="org.eclipse.elk.core.service.layoutManagers"&gt;

       &lt;manager
          class="your.layout.manager.implementation"&gt;
       &lt;/manager&gt;
    &lt;/extension&gt;
  </pre>


  <h2>Customizing Automatic Layout</h2>
  <p>
    Chances are that the layouts you're getting at this point
    are not perfect for your type of diagram.
    That is to be expected.
    Luckily, most algorithms can be configured
    through the use of <em>layout options</em>.
  </p>
  <p>
    The first thing you will want to do
    is to experiment with the available options.
    To do so,
    open your editor as well as the <em>Layout View</em>
    provided by ELK.
    The view will show you the options
    available for the selected diagram elements
    and allow you to play around with them.
  </p>
  <img width="100%"
       src="/elk/img/getting_started_layout_button.png"
       alt="The layout button triggers layout on your diagram." />
  <p>
    Once you have found settings you like,
    it's time to configure layout such
    that these settings are always applied.
    (You don't want your users
    having to use the layout view,
    now, do you?)
    There are different ways to do so,
    and we have <a href="https://rtsys.informatik.uni-kiel.de/confluence/x/0IF1">more in-depth information on them</a>
    at the old incarnation of the project.
  </p>
  <p>
    The easiest way is to simply register static configurations with ELK.
    Static configurations are registered with the
    org.eclipse.elk.core.layoutConfigs extension point.
    Each static config consists of three parts:
  </p>
  <ol>
    <li>
      A class name.
      If ELK encounters an instance of this type,
      it will apply the static configuration to it.
      The class name can be the name of a domain model class,
      or the name of a class of your editor's view model.
    </li>
    <li>
      An option ID.
      This is the identifier of the layout option
      you actually want ELK to set on the element.
    </li>
    <li>
      An option value.
      This is the value you want ELK to set on the element
      for the layout option.
    </li>
  </ol>
  <p>
    Now, you may think that you don't have all of these information at hand,
    but you're actually wrong.
    You can find all of these information
    by selecting your diagram element,
    selecting the layout option in the layout view,
    and pressing the layout view's info button.
    The dialog that pops up
    will give you all the information you need.
  </p>
  <img width="100%"
       src="/elk/img/getting_started_layout_view_info.png"
       alt="Finding out more about selected elements and layout options through the layout view." />
</div>
<!-- ./end  #midcolumn -->

<!-- Start of the right column -->
<div id="rightcolumn">
  <div class="sideitem">
    <h3>Work in Progress</h3>
    <p>
      This guide is very much work in progress.
      We're posting intermediate versions in the hope
      that they may already be useful to people,
      but there may be problems and big gaps.
      We're working on it,
      and you've been warned!
    </p>
  </div>
</div>
<!-- ./end  #rightcolumn -->
