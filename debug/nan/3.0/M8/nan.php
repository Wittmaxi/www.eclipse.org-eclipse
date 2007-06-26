<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2007 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.0M8 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.0M8";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<TABLE cellSpacing=0 cellPadding=10 width="80%" border=0>
		  <TBODY>
		  <TR>
		    <TD colSpan=2>
		      <HR>
		    </TD></TR>
		  <TR>
		    <TD valign=top align=left width="30%">
		      <P align=right><B>Evaluation Popups throughout the debug support and the addition of a details area for the Inspect popup</B> </P></TD>
		    <TD width="70%"> Evaluation popups are used for all Display and Inspect results. As well, a details area has been implemented for the Inspect popup.<p></P>
		      <P><IMG src="inspect_popup.gif"></P></TD></TR>
		  <TR>
		  <TR>
		        <TD colSpan=2>
		          <HR>
		      </TD>
		    </TR>
		    <TR>
		        <TD valign=top align=left width="30%">
		          <P align=right><B>Enhanced debugging in non-debug perspective</B> </P></TD>
		
		    <TD width="70%">New options to switch perspectives and activate the debug view when a breakpoint is hit. The user is prompted before the perspective is changed.
		    </TD></TR>
		    <TR>
		      <TD colSpan=2>
		        <HR>
		      </TD>
		    </TR>
		  <TR>
		      <TD valign=top align=left width="30%">
		        <P align=right><B>Use of detail pane in variables view to set the value of a variable </B> </P></TD>
		      <TD width="70%">The value of the selected variable in the Variables View can now be changed in the details area of that view by typing the new
		      value and using the context menu's "Assign Value" command (Ctrl-S by default).
		      <P><IMG src="detail_pane_set_value.gif"></P></TD></TR>
		    </TD></TR>
		 <TR>
		      <TD colSpan=2>
		        <HR>
		      </TD>
		    </TR>
		    <TR>
			      <TD valign=top align=left width="30%">
			        <P align=right><B>Skipping breakpoints</B> </P></TD>
			      <TD width="70%">A new Skip breakpoints button has been added that turns off all breakpoints in the workspace. New preferences have been added to skip breakpoints during run-to-line and evaluations.
		      <P><IMG src="skip_all_breakpoint.gif"></P></TD></TR>
		    </TD></TR>
		    <TR>
			      <TD colSpan=2>
			        <HR>
			      </TD>
			    </TR>
			    <TR>
				<TD valign=top align=left width="30%">
				<P align=right><B>Easier extension of Existing Environment</B> </P></TD>
				<TD width="70%">Ability to select from existing environment variables in Environment launch configuration tab 
				    </TD></TR>
				    <TR>
					      <TD colSpan=2>
					        <HR>
					      </TD>
			    </TR>
		
			    <TR>
				      <TD valign=top align=left width="30%">
				        <P align=right><B>Launching from the context menu in navigator </B> </P></TD>
				      <TD width="70%">The launch shortcuts are now available from the navigator too.
								<P><img src="navigator_run_context.gif"></P>
		    </TD></TR>
		    <TR>
			      <TD colSpan=2>
			        <HR>
			      </TD>
			    </TR>
				    <TR>
					      <TD valign=top align=left width="30%">
					        <P align=right><B> Default VM arguments can be associated with a JRE</B> </P></TD>
					      <TD width="70%">Any JRE Install can now have a set of default VM arguments associated with it. 
					      These arguments will be passed to the VM whenever it is used.
		
								<P><img src="default_vm_args.gif"></P>
		    </TD></TR>
		    <TR>
					      <TD colSpan=2>
					        <HR>
					      </TD>
				    </TR>
			  <TR>
			      <TD valign=top align=left width="30%">
			        <P align=right><B>Class prepare breakpoints</B> </P></TD>
		
		    <TD width="70%">Breakpoints can be set on a class prepare event. The program will be suspended
		    				when the specified class or interface is loaded in the VM.
							<P><img src="class_prepare_breakpoint.gif"></P>
		    </TD></TR>
			  <TR>
			    <TD colSpan=2>
			      <HR>
			    </TD>
		    </TR>
				  <TR>
				      <TD valign=top align=left width="30%">
				        <P align=right><B>Restart option when hot code replace fails </B> </P></TD>
		
		    <TD width="70%">When changes are made in the host VM that hot code replace does not support, the user is now
		    given the option to &quot;Restart&quot; the VM instead of only being able choose &quot;Terminate&quot; or &quot;Continue&quot;.
								<P><img src="hot_code_replace_failed.gif"></P>
		    </TD></TR>
				  <TR>
				    <TD colSpan=2>
				      <HR>
				    </TD>
		    </TR>
		     <TR>
				      <TD valign=top align=left width="30%">
				        <P align=right><B>Refactoring support for Java launch configurations</B> </P></TD>
		
			    <TD width="70%">Java launch configurations are updated when a project, a package, or a type is renamed.
		    </TD></TR>
		    	  <TR>
					    <TD colSpan=2>
					      <HR>
					    </TD>
			    </TR>
		    
		    <TR>
				<TD colSpan=2>
					<HR>
			    </TD>
			</TR>
			<TR>
				<TD valign=top align=left width="30%">
					<P align=right><B>Workspace is checked for breakpoints before launching in run mode</B> </P>
				</TD>
			    <TD width="70%">
			    	When an application is launched in run mode and breakpoints are set in the
			    	workspace, the user will be prompted to determine if the launch should be in debug mode. A launching 
			    	preference has been provided to turn this feature on and off.
								<P><img src="breakpoint_run_mode.gif"></P>
				</TD>
			</TR>
		    <TR>
				<TD colSpan=2>
					<HR>
			    </TD>
			</TR>
			<TR>
				<TD valign=top align=left width="30%">
					<P align=right><B>Pre-launch builds are restricted to the project being launched and its prerequisite projects</B></P>
				</TD>
			    <TD width="70%">
			    	When a user is running eclipse without auto-build on, and a build is required before launching, the build will be restricted to 
			    	the project containing the class file being launched and any prerequisite project. Eclipse will no longer build the entire workspace
			    	in this scenario.
				</TD>
			</TR>
		    <TR>
				<TD colSpan=2>
					<HR>
			    </TD>
			</TR>	
			<TR>
				<TD valign=top align=left width="30%">
					<P align=right><B>User is prompted when trying to launch an application from a project that contains compile errors</B></P>
				</TD>
			    <TD width="70%">
			    	When a launch is initiated from a project that contains compile errors, or a project that it depends on contains compile errors,
			    	the user is prompted and given the chance to cancel the launch. A launching preference has been provided to turn this feature 
			    	on and off.
								<P><img src="compile_errors.gif"></P>
				</TD>
			</TR>
			 <TR>
				<TD colSpan=2>
					<HR>
			    </TD>
			</TR>	
			<TR>
				<TD valign=top align=left width="30%">
					<P align=right><B>Ant errors and warnings shown in the Problems view</B></P>
				</TD>
			    <TD width="70%">
					Parsing and syntax errors resulting from an Ant build file are displayed in the Problems view. Potential problems such as missing libraries or class files
					as specified in a taskdef as flagged as warnings.
							<P><img src="ant_problem_view.gif"></P>
				</TD>
			</TR>		
			 <TR>
				<TD colSpan=2>
					<HR>
			    </TD>
			</TR>	
			<TR>
				<TD valign=top align=left width="30%">
					<P align=right><B>Ant code assist proposals for custom tasks and types</B></P>
				</TD>
			    <TD width="70%">
					Tasks or types defined within the buildfile or via extension point are presented as code assist proposals if they are relevant.
					Attributes for these tasks and types are also available via code assist.
				</TD>
			</TR>
			<TR>
				<TD colSpan=2>
					<HR>
			    </TD>
			</TR>	
			<TR>
				 <TD valign=top align=left width="30%">
				       <P align=right><B>Initial work for template support in the Ant editor</B> </P></TD>
		
			    <TD width="70%">A first release of template support for Ant buildfiles is included.
								<P><img src="ant_templates.gif"></P>
		    </TD></TR>
		    <TR>
				<TD colSpan=2>
					<HR>
			    </TD>
			</TR>	
			<TR>
				 <TD valign=top align=left width="30%">
				       <P align=right><B>Environment tabs added</B> </P></TD>
		
			    <TD width="70%">The launch configuration tab for specifying the environment has been added for Ant launches, and external tool builders.
		    </TD></TR>
			<TR>
				<TD colSpan=2>
					<HR>
			    </TD>
			</TR>	
			<TR>
				 <TD valign=top align=left width="30%">
				       <P align=right><B>Ant external tool builders can be set to build in an external VM</B> </P></TD>
		
			    <TD width="70%">The JRE tab has been added to configure the JRE of the launch for Ant external tool builders.
		    </TD></TR>
		    <TR>
				<TD colSpan=2>
					<HR>
			    </TD>
			</TR>	
			<TR>
				 <TD valign=top align=left width="30%">
				       <P align=right><B>More filtering options in the Ant editor outline</B> </P></TD>
		
			    <TD width="70%">You can now filter out top level types and imported elements.
								<P><img src="ant_outline.gif"></P>
		    </TD></TR>
		    <TR>
				<TD colSpan=2>
					<HR>
			    </TD>
			</TR>	
			<TR>
				 <TD valign=top align=left width="30%">
				       <P align=right><B>Ant editor outline can be linked with the Ant editor</B> </P></TD>
		
			    <TD width="70%">A "Link with Editor" toolbar action has been added to the Ant editor outline. This action toggles whether the Ant outline page links
				 its selection to the active Ant editor.
		    </TD></TR>
		    <TR>
				<TD colSpan=2>
					<HR>
			    </TD>
			</TR>	
			<TR>
				 <TD valign=top align=left width="30%">
				       <P align=right><B>Ant editor outline support for working with imported elements</B> </P></TD>
		
			    <TD width="70%">In handling an imported file (using the Ant 1.6.* &lt;import&gt; task), the Ant editor outline, adds label and icon decorators to indicate imported elements.
			    As previously noted these elements can be filtered from the outline. Support is also provide for navigating to the imported element in the buildfile that it is defined within.
		    </TD></TR>
		    <TR>
				<TD colSpan=2>
					<HR>
			    </TD>
			</TR>	
			<TR>
				 <TD valign=top align=left width="30%">
				       <P align=right><B>Extension point support for separate VM builds</B> </P></TD>
		
			    <TD width="70%">Support has been added for making use of Ant extension point definitions in separate VM builds. Ant extra classpath entries, tasks, types 
			    and properties can be defined to be available in separate VM builds. See bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=47901">47901</a>.
		    </TD></TR>
		    </TBODY></TABLE>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
