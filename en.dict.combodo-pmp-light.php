<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// Project class
Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContactToProject'  =>  'Link Contact To Project',
	'Class:lnkContactToProject/Attribute:contact_id'  =>  'Contact',
	'Class:lnkContactToProject/Attribute:interest'  =>  'Interest',
	'Class:lnkContactToProject/Attribute:interest/Value:objector'  =>  'Objector',
	'Class:lnkContactToProject/Attribute:interest/Value:partner'  =>  'Partner',
	'Class:lnkContactToProject/Attribute:interest+'  =>  '',
	'Class:lnkContactToProject/Attribute:power/Value:low'  =>  'Low',
	'Class:lnkContactToProject/Attribute:power/Value:strong'  =>  'Strong',
	'Class:lnkContactToProject/Attribute:project_id'  =>  'Project',
	'Class:lnkContactToProject/Name'  =>  '%1$s - %2$s',
	'Class:Project'  =>  'Project',
	'Class:Project/Attribute:calculated_end_date'  =>  'Latest deliverable end date',
	'Class:Project/Attribute:calculated_end_date+'  =>  'Take the latest deliverable date',
	'Class:Project/Attribute:constraints'  =>  'Constraints',
	'Class:Project/Attribute:constraints+'  =>  '',
	'Class:Project/Attribute:creation_date'  =>  'Creation date',
	'Class:Project/Attribute:creation_date+'  =>  '',
	'Class:Project/Attribute:description'  =>  'Description',
	'Class:Project/Attribute:description+'  =>  '',
	'Class:Project/Attribute:end_date'  =>  'End date',
	'Class:Project/Attribute:end_date+'  =>  '',
	'Class:Project/Attribute:estimated_budget'  =>  'Estimated budget',
	'Class:Project/Attribute:estimated_budget+'  =>  '',
	'Class:Project/Attribute:exclusions'  =>  'Exclusions',
	'Class:Project/Attribute:exclusions+'  =>  '',
	'Class:Project/Attribute:issue_id'  =>  'Issue',
	'Class:Project/Attribute:issue_id+'  =>  '',
	'Class:Project/Attribute:issues_list'  =>  'Issues related',
	'Class:Project/Attribute:issues_list+'  =>  '',
	'Class:Project/Attribute:last_update'  =>  'Last update',
	'Class:Project/Attribute:last_update+'  =>  '',
	'Class:Project/Attribute:mgt_reserve_budget'  =>  'Management reserve budget',
	'Class:Project/Attribute:mgt_reserve_budget+'  =>  '',
	'Class:Project/Attribute:name'  =>  'Name',
	'Class:Project/Attribute:name+'  =>  '',
	'Class:Project/Attribute:org_id'  =>  'Project for customer',
	'Class:Project/Attribute:org_id+'  =>  '',
	'Class:Project/Attribute:person_id'  =>  'Project sponsor',
	'Class:Project/Attribute:person_id+'  =>  '',
	'Class:Project/Attribute:project_manager_id'  =>  'Project manager',
	'Class:Project/Attribute:project_manager_id+'  =>  '',
	'Class:Project/Attribute:ref'  =>  'Ref',
	'Class:Project/Attribute:ref+'  =>  '',
	'Class:Project/Attribute:requirement'  =>  'Requirements',
	'Class:Project/Attribute:requirement+'  =>  '',
	'Class:Project/Attribute:revised_budget'  =>  'Revised budget',
	'Class:Project/Attribute:revised_budget+'  =>  '',
	'Class:Project/Attribute:revised_end_date'  =>  'Revised end date',
	'Class:Project/Attribute:revised_end_date+'  =>  '',
	'Class:Project/Attribute:risks_list'  =>  'Risks related',
	'Class:Project/Attribute:risks_list+'  =>  '',
	'Class:Project/Attribute:sponsor_id'  =>  'Sponsor',
	'Class:Project/Attribute:sponsor_id+'  =>  '',
	'Class:Project/Attribute:stakeholder_list'  =>  'Stakeholders',
	'Class:Project/Attribute:stakeholder_list+'  =>  'People involved in this project',
	'Class:Project/Attribute:start_date'  =>  'Start date',
	'Class:Project/Attribute:start_date+'  =>  '',
	'Class:Project/Attribute:status'  =>  'Status',
	'Class:Project/Attribute:status/Value:close'  =>  'Closing',
	'Class:Project/Attribute:status/Value:execute'  =>  'Executing',
	'Class:Project/Attribute:status/Value:initiate'  =>  'Initiating',
	'Class:Project/Attribute:status/Value:monitor'  =>  'Monitoring',
	'Class:Project/Attribute:status/Value:plan'  =>  'Planning',
	'Class:Project/Attribute:status+'  =>  '',
	'Class:Project/Attribute:title'  =>  'Project title',
	'Class:Project/Attribute:title+'  =>  '',
	'Class:Project/Attribute:wbs_cost'  =>  'Deliverables costs',
	'Class:Project/Attribute:wbs_cost+'  =>  '',
	'Class:Project/Attribute:wbss_list'  =>  'Deliverables',
	'Class:Project/Attribute:wbss_list+'  =>  '',
	'Class:Project/Attribute:project_log' => 'Project log',
	'Class:Project/Attribute:project_log+' => '',
	'Class:Project/Name'  =>  '%1$s-%2$s',
	'Class:Project/Tab:Summary'  =>  'Summary',
	'Class:Project/Tab:Summary+'  =>  'Summary of current project',
	'Class:Project:Summary_costs'  =>  'Costs information',
	'Class:Project:Summary_general'  =>  'General information',
	'Class:Project:Details'  =>  'Details',
	'Class:Project+'  =>  '',
	'Class:Project/CreateDeliverable'  =>  'Create Deliverable...',
	'Menu:MyProject'  =>  'My projects',
	'Menu:MyProject+'  =>  'My projects as project manager',
	'Menu:NewProject'  =>  'New project',
	'Menu:Overview'  =>  'Project : overview',
	'Menu:Project:Overview'  =>  'Overview',
	'Menu:ProjectManagement'  =>  'Project Management',
	'Menu:ProjectMenu'  =>  'Project Menu',
	'Menu:SearchProject'  =>  'Search for projects',
	'Project:Budget'  =>  'Costs',
	'Project:Contacts'  =>  'Contacts',
	'Project:Costs'  =>  'Costs',
	'Project:Dates'  =>  'Dates',
	'Project:Error:EndDateMustBeGreaterThanStartDate'  =>  'End date must be greater than start date',
	'Project:Error:ProjectEndDateMustBeGreaterThanWBSEndDate'  =>  'Project End date must be greater than latest End date of deliverable',
	'Project:GeneralInfo'  =>  'Project information',
	'UI:AddLinkedObjectsOf_Class'  =>  'Add %1$s objects...',
	'UI:ProjectMgmtMenuOverview:Title'  =>  'Dashboard for project management',
	'UI-ProjectManagementOverview-Last-12Months'  =>  'Projects of the last 12 months (per project start date)',
	'UI-ProjectManagementOverview-Last-3Months'  =>  'Projects of the last 3 months (per customer)',
	'UI-ProjectManagementOverview-OpenProjectByStatus'  =>  'Open projects by status',
));


// WBS class
Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkAnalysisToWBS'  =>  'Link Analysis to WBS',
	'Class:lnkAnalysisToWBS/Attribute:analysis_id'  =>  'Issue or Risk',
	'Class:lnkAnalysisToWBS/Attribute:analysis_id_finalclass_recall'  =>  'Finalclass',
	'Class:lnkAnalysisToWBS/Attribute:analysis_title'  =>  'Title',
	'Class:lnkAnalysisToWBS/Attribute:wbs_id'  =>  'Deliverable',
	'Class:lnkAnalysisToWBS/Name'  =>  '%1$s - %2$s',
	'Class:lnkWBSToWBS'  =>  'Link Child WBS To Parent WBS',
	'Class:lnkWBSToWBS/Attribute:child_wbs_id'  =>  'Child deliverable',
	'Class:lnkWBSToWBS/Attribute:parent_wbs_id'  =>  'Parent deliverable',
	'Class:lnkWBSToWBS/Attribute:wbs_id'  =>  'Parent deliverable',
	'Class:lnkWBSToWBS/Name'  =>  '%1$s - %2$s',
	'Class:WBS'  =>  'Deliverable',
	'Class:WBS/Attribute:acceptance'  =>  'Acceptance criteria',
	'Class:WBS/Attribute:acceptance+'  =>  '',
	'Class:WBS/Attribute:analysiss_list'  =>  'Issue or Risk',
	'Class:WBS/Attribute:available_budget'  =>  'Available budget',
	'Class:WBS/Attribute:available_budget+'  =>  '',
	'Class:WBS/Attribute:completion'  =>  '% complete',
	'Class:WBS/Attribute:completion+'  =>  '',
	'Class:WBS/Attribute:delay'  =>  'Delay',
	'Class:WBS/Attribute:delay+'  =>  '',
	'Class:WBS/Attribute:description'  =>  'Description of work',
	'Class:WBS/Attribute:description+'  =>  '',
	'Class:WBS/Attribute:end_date'  =>  'End date',
	'Class:WBS/Attribute:end_date+'  =>  '',
	'Class:WBS/Attribute:freetime'  =>  'From now to end date',
	'Class:WBS/Attribute:freetime+'  =>  '',
	'Class:WBS/Attribute:issues_list'  =>  'Issues associated ',
	'Class:WBS/Attribute:issues_list+'  =>  '',
	'Class:WBS/Attribute:labor_cost'  =>  'Labor cost',
	'Class:WBS/Attribute:labor_cost+'  =>  '',
	'Class:WBS/Attribute:material_cost'  =>  'Material cost',
	'Class:WBS/Attribute:material_cost+'  =>  '',
	'Class:WBS/Attribute:name'  =>  'Name',
	'Class:WBS/Attribute:name+'  =>  '',
	'Class:WBS/Attribute:project_id'  =>  'Project name',
	'Class:WBS/Attribute:project_id+'  =>  '',
	'Class:WBS/Attribute:projectchanges_list'  =>  'Project changes',
	'Class:WBS/Attribute:re_estimated_end_date'  =>  'Re estimated end date',
	'Class:WBS/Attribute:re_estimated_end_date+'  =>  '',
	'Class:WBS/Attribute:re_estimated_start_date'  =>  'Re estimated start date',
	'Class:WBS/Attribute:re_estimated_start_date+'  =>  '',
	'Class:WBS/Attribute:ref'  =>  'Ref',
	'Class:WBS/Attribute:ref+'  =>  '',
	'Class:WBS/Attribute:risks_list'  =>  'Risks associated ',
	'Class:WBS/Attribute:risks_list+'  =>  '',
	'Class:WBS/Attribute:start_date'  =>  'Start date',
	'Class:WBS/Attribute:start_date+'  =>  '',
	'Class:WBS/Attribute:status'  =>  'Status',
	'Class:WBS/Attribute:status/Value:cancel'  =>  'Cancelled',
	'Class:WBS/Attribute:status/Value:closed'  =>  'Completed',
	'Class:WBS/Attribute:status/Value:pending_parent'  =>  'Pending parent deliverable',
	'Class:WBS/Attribute:status/Value:running'  =>  'Running',
	'Class:WBS/Attribute:status+'  =>  'Status of WBS',
	'Class:WBS/Attribute:technical_info'  =>  'Technical information',
	'Class:WBS/Attribute:technical_info+'  =>  '',
	'Class:WBS/Attribute:time_planned'  =>  'Planned time',
	'Class:WBS/Attribute:time_planned+'  =>  '',
	'Class:WBS/Attribute:wbs_budget'  =>  'Budget',
	'Class:WBS/Attribute:wbs_budget+'  =>  '',
	'Class:WBS/Attribute:wbs_cost'  =>  'Total cost ',
	'Class:WBS/Attribute:wbs_cost+'  =>  '',
	'Class:WBS/Attribute:wbs_owner_id'  =>  'Owner',
	'Class:WBS/Attribute:wbs_owner_id+'  =>  '',
	'Class:WBS/Attribute:wbs_real_costs'  =>  'WBS real costs',
	'Class:WBS/Attribute:wbs_real_costs+'  =>  '',
	'Class:WBS/Attribute:wbss_child_list'  =>  'Child deliverable',
	'Class:WBS/Attribute:wbss_list'  =>  'Dependant deliverable',
	'Class:WBS/Attribute:wbss_list+'  =>  '',
	'Class:WBS/Attribute:wbss_parent_list'  =>  'Parent deliverable',
	'Class:WBS/Attribute:wbs_log' => 'Deliverable log',
	'Class:WBS/Attribute:wbs_log' => '',
	'Class:WBS/Name'  =>  '%1$s-%2$s',
	'Class:WBS/Stimulus:ev_cancel'  =>  'Cancel deliverable',
	'Class:WBS/Stimulus:ev_closed'  =>  'Closed',
	'Class:WBS/Stimulus:ev_reopen'  =>  'Re-open',
	'Class:WBS/Stimulus:ev_running_admin'  =>  'Activate child task',
	'Class:WBS+'  =>  'List of deliverable of Work Breakdown Structure',
	'Menu:MyWBS'  =>  'My managed deliverables',
	'Menu:MyWBS+'  =>  'WBS I own',
	'Menu:NewWBS'  =>  'New deliverable',
	'Menu:SearchWBS'  =>  'Search for deliverables',
	'Menu:WBSMenu'  =>  'Deliverables Menu',
	'UI-WBSManagementOverview-OpenWBSByProject'  =>  'Open deliverables by customer project',
	'WBS:Cost'  =>  'Costs',
	'WBS:Dates'  =>  'Dates',
	'WBS:Error:ParentCantBeChildren'  =>  'You cannot be your own parent deliverable',
	'WBS:Execution'  =>  'Execution',
	'WBS:Info'  =>  'Information',
));


?>
