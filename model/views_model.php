<?php
class viewModel
{
    protected static function get_view($view)
    {
        $white_list = ["home", "products", "users", "new-user","edit-user", "products", "new-product", "edit-products", "category", "new-category", "edit-category", "orders", "order-details", "profile", "settings","clients","new-client","edit-client","proveedor","edit-proveedor","new-proveedor"];
        if (in_array($view, $white_list)) {
            if (is_file("./view/" . $view . ".php")) {
                $content = "./view/" . $view . ".php";
            } else {
                $content = "404";
            }
        } elseif ($view == "login") {
            $content = "login";
        } else {
            $content = "404";
        }
        return $content;
    }
}
