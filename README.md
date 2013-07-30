use_minified
======

This is is a CLI-consumable function which reads the file contents and replaces any script and stylesheet names within the file with the minified ones. It simply replaces existing names and appends a .min and saves the the content back to the file.

But Why?
---

Because I had to manually got to files in my projects and change those files to point to the minified version of Javascript and CSS files which were compressed/minified via YUI Compressor and I use ANT as a Netbeans plugin.

So, I had done much already to minfify scripts and stylesheets, I thought that's merely a problem to write a straight-forward function to do me the favour and save me either form manually changing or doing a Find/Replace in the whole project.

Usage
---

<strong>CLI</strong>

<code>php use_minified.php path/to/file</code>

<strong>ANT</strong>

<code>
  &lt;exec executable="php">
  
      <arg line="path/to/use_minified.php ${build.dir}\file.php"></arg>
      
	</exec>
</code>
  

<em>Note:</em> The result is saved in the same file.
