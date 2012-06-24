/**
 * @author Jeeb
 */
 
$(document).ready( function() {
	
	var summary_id = "#menu_summary";
	var summary_url = "http://localhost/FinancePlanner/summary";
	
	var expenses_id = "#menu_expenses";
	var expenses_url = "http://localhost/FinancePlanner/expenses";
	
	var income_id = "#menu_income";
	var income_url = "http://localhost/FinancePlanner/income";
	
	var savings_id = "#menu_savings";
	var savings_url = "http://localhost/FinancePlanner/savings";	
	
	
	// sets current menu as selected
	var current_menu = $(location).attr('href');
	var menu_item_selected_class = "menu_item_selected";
	
	if (current_menu == summary_url) {
	
		$(summary_id).addClass(menu_item_selected_class);
	} else if (current_menu == expenses_url) {
	
		$(expenses_id).addClass(menu_item_selected_class);
	} else if (current_menu == income_url) {
		
		$(income_id).addClass(menu_item_selected_class);
	} else if (current_menu == savings_url) {
		
		$(savings_id).addClass(menu_item_selected_class);
	}
	
	
	// on clicks of menu buttons -- page redirection
	$(summary_id).click( function() {
		$(location).attr('href', summary_url);
	});
	$(expenses_id).click( function() {
		$(location).attr('href', expenses_url);
	});
	$(income_id).click( function() {
		$(location).attr('href', income_url);
	});
	$(savings_id).click( function() {
		$(location).attr('href', savings_url);
	});
});
