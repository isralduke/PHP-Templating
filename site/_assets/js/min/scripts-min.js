function capenable(){$("#submit").html("submit"),$("#submit").removeAttr("disabled")}function capdisable(){$("#submit").attr("disabled",!0),$("#submit").html("are you human?")}function confirm(){$("#form").slideUp("fast"),$(".confirmation").slideToggle("slow"),$("#form").ajaxForm()}capdisable(),$("#submit").click(function(){confirm()}),lightGallery(document.getElementById("lightgallery"),{download:!1});