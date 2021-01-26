// JavaScript Document

// jQuery code
var i = document.createElement("input");

// Only bind if placeholder isn't natively supported by the browser
if (!("placeholder" in i)) {
	$("input[placeholder]").each(function () {
		var self = $(this);
		self.val(self.attr("placeholder")).bind({
			focus: function () {
				if (self.val() === self.attr("placeholder")) {
					self.val("");
				}
			},
			blur: function () {
				var label = self.attr("placeholder");
				if (label && self.val() === "") {
					self.val(label);
				}
			}
		});
	});
	$("textarea[placeholder]").each(function () {
		var self = $(this);
		self.val(self.attr("placeholder")).bind({
			focus: function () {
				if (self.val() === self.attr("placeholder")) {
					self.val("");
				}
			},
			blur: function () {
				var label = self.attr("placeholder");
				if (label && self.val() === "") {
					self.val(label);
				}
			}
		});
	});
}