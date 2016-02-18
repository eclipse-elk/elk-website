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
  <h1>Getting Involved</h1>
  <p>
    So you want to start contributing
    to the Eclipse Layout Kernel?
    Cool!
    Here's some information you'll need to get started.
  </p>


  <h2>Submitting Issues</h2>
  <p>
    The easiest way to contribute
    is to submit problems you've found with ELK.
    We have <a href="https://github.com/eclipse/elk/issues">an issue tracker</a>
    for exactly that purpose.
    Simply sign up for a GitHub account
    if you haven't done so yet
    and submit away!
    If you submit an actual bug,
    be sure to include enough information
    for us to reproduce it.
  </p>


  <h2>Submitting Code</h2>
  <p>
    As an open source project,
    we are of course grateful for any outside contributions.
    Who knows,
    if you turn into a regular contributor,
    you may even become an official part of our project.
    How cool would that be!
    Still,
    this is a bit more difficult
    than simply submitting issues,
    but it's not too bad
    and generally well worth the effort.
    Let's walk you through this!
  </p>

  <h3>Setting Up Your Development Environment</h3>
  <p>
    You will first need an Eclipse installation
    to hack away on ELK with.
    Since we have a shiny Oomph setup available,
    this turns out to be comparatively painless
    (note that our setup assumes
    that you have a GitHub account):
  </p>
  <ol>
    <li>
      Go to <a href="https://www.eclipse.org/downloads/index.php">this site</a> and download the Eclipse Installer for your platform.
      You will find the links at the bottom of the "Try the Eclipse Installer" box.
    </li>
    <li>
      Start the installer.
      It will ask you for the Eclipse distribution
      your new installation will be based on.
      The best choice here is probably the <em>Eclipse Modeling Tools</em>.
    </li>
    <li>
      The next step is to select the projects you want to work on.
      From the GitHub category,
      choose Eclipse Layout Kernel.
      It must appear in the lower of the two boxes.
    </li>
    <li>
      Customize the required settings on the next page and let Oomph do its magic.
    </li>
  </ol>
  <p>
    If Oomph fails to clone our GitHub repository,
    this is probably due to Eclipse not finding your SSH key for GitHub.
    Fix it by going to the Eclipse preferences.
    You can manage your keys under <em>General</em> &gt; <em>Network Connections</em> &gt; <em>SSH2</em>.
    Once you have setup your SSH keys,
    let Oomph try again by selecting <em>Perform Setup Tasks</em>
    from the <em>Help</em> menu.
  </p>


  <h3>Getting in Touch</h3>
  <p>
    Be sure to tell us what you would like to do.
    There are a few ways to do so:
  </p>
  <ul>
    <li>
      Subscribe to our <a href="https://dev.eclipse.org/mailman/listinfo/elk-dev">developer mailing list</a>
      to discuss changes and be notified of terribly exciting things that happen at ELK.
    </li>
    <li>
      We use <a href="https://github.com/eclipse/elk/issues">GitHub's issue tracker</a>
      to organize everything.
      Do so, too, and enjoy that fuzzy warm feeling of camaraderie.
    </li>
  </ul>


  <h3>Actually Contributing</h3>
  <p>
    So you have opened an issue for what you'd like to do,
    and you have gone ahead and done it.
    Nice!
    There are two things to do:
  </p>
  <ol>
    <li>
      Sign up for an account at <a href="https://eclipse.org">Eclipse</a>
      and sign a <em>Contributor License Agreement (CLA)</em>.
      Be sure to link your GitHub account with your Eclipse account
      by entering your GitHub account name in your Eclipse account settings.
    </li>
    <li>
      Push your commits to a fork of our repository
      and create a pull request for us to merge in your changes.
      We will probably request a few changes,
      but if we generally like your code
      it will end up in ELK.
    </li>
  </ol>
</div>
<!-- ./end  #midcolumn -->
