<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection category_id
     * @property Grid\Column|Collection goods_name
     * @property Grid\Column|Collection goods_shorttitle
     * @property Grid\Column|Collection goods_keywords
     * @property Grid\Column|Collection goods_property
     * @property Grid\Column|Collection goods_description
     * @property Grid\Column|Collection goods_price
     * @property Grid\Column|Collection goods_original_price
     * @property Grid\Column|Collection goods_cost
     * @property Grid\Column|Collection goods_sell_num
     * @property Grid\Column|Collection goods_stock
     * @property Grid\Column|Collection goods_unit
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection goods_id
     * @property Grid\Column|Collection goods_key
     * @property Grid\Column|Collection goods_value
     * @property Grid\Column|Collection goods_desc
     * @property Grid\Column|Collection order_sn
     * @property Grid\Column|Collection remark
     * @property Grid\Column|Collection order_status
     * @property Grid\Column|Collection consignee_name
     * @property Grid\Column|Collection consignee_mobile
     * @property Grid\Column|Collection province
     * @property Grid\Column|Collection city
     * @property Grid\Column|Collection district
     * @property Grid\Column|Collection address
     * @property Grid\Column|Collection payment_method
     * @property Grid\Column|Collection order_money
     * @property Grid\Column|Collection district_money
     * @property Grid\Column|Collection freight_money
     * @property Grid\Column|Collection payment_money
     * @property Grid\Column|Collection pay_time
     * @property Grid\Column|Collection goods_amount
     * @property Grid\Column|Collection checked
     * @property Grid\Column|Collection goods_count
     * @property Grid\Column|Collection goods_pic
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection pic_desc
     * @property Grid\Column|Collection pic_url
     * @property Grid\Column|Collection is_master
     * @property Grid\Column|Collection pic_order
     * @property Grid\Column|Collection pic_status
     * @property Grid\Column|Collection agency_id
     * @property Grid\Column|Collection area
     * @property Grid\Column|Collection area_code
     * @property Grid\Column|Collection far_area
     * @property Grid\Column|Collection nickname
     * @property Grid\Column|Collection avatar_url
     * @property Grid\Column|Collection gender
     * @property Grid\Column|Collection real_name
     * @property Grid\Column|Collection ipone
     * @property Grid\Column|Collection language
     * @property Grid\Column|Collection country
     * @property Grid\Column|Collection openid
     * @property Grid\Column|Collection uid
     * @property Grid\Column|Collection mobile
     * @property Grid\Column|Collection zip
     * @property Grid\Column|Collection province_id
     * @property Grid\Column|Collection city_id
     * @property Grid\Column|Collection district_id
     * @property Grid\Column|Collection is_default
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection category_id(string $label = null)
     * @method Grid\Column|Collection goods_name(string $label = null)
     * @method Grid\Column|Collection goods_shorttitle(string $label = null)
     * @method Grid\Column|Collection goods_keywords(string $label = null)
     * @method Grid\Column|Collection goods_property(string $label = null)
     * @method Grid\Column|Collection goods_description(string $label = null)
     * @method Grid\Column|Collection goods_price(string $label = null)
     * @method Grid\Column|Collection goods_original_price(string $label = null)
     * @method Grid\Column|Collection goods_cost(string $label = null)
     * @method Grid\Column|Collection goods_sell_num(string $label = null)
     * @method Grid\Column|Collection goods_stock(string $label = null)
     * @method Grid\Column|Collection goods_unit(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection goods_id(string $label = null)
     * @method Grid\Column|Collection goods_key(string $label = null)
     * @method Grid\Column|Collection goods_value(string $label = null)
     * @method Grid\Column|Collection goods_desc(string $label = null)
     * @method Grid\Column|Collection order_sn(string $label = null)
     * @method Grid\Column|Collection remark(string $label = null)
     * @method Grid\Column|Collection order_status(string $label = null)
     * @method Grid\Column|Collection consignee_name(string $label = null)
     * @method Grid\Column|Collection consignee_mobile(string $label = null)
     * @method Grid\Column|Collection province(string $label = null)
     * @method Grid\Column|Collection city(string $label = null)
     * @method Grid\Column|Collection district(string $label = null)
     * @method Grid\Column|Collection address(string $label = null)
     * @method Grid\Column|Collection payment_method(string $label = null)
     * @method Grid\Column|Collection order_money(string $label = null)
     * @method Grid\Column|Collection district_money(string $label = null)
     * @method Grid\Column|Collection freight_money(string $label = null)
     * @method Grid\Column|Collection payment_money(string $label = null)
     * @method Grid\Column|Collection pay_time(string $label = null)
     * @method Grid\Column|Collection goods_amount(string $label = null)
     * @method Grid\Column|Collection checked(string $label = null)
     * @method Grid\Column|Collection goods_count(string $label = null)
     * @method Grid\Column|Collection goods_pic(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection pic_desc(string $label = null)
     * @method Grid\Column|Collection pic_url(string $label = null)
     * @method Grid\Column|Collection is_master(string $label = null)
     * @method Grid\Column|Collection pic_order(string $label = null)
     * @method Grid\Column|Collection pic_status(string $label = null)
     * @method Grid\Column|Collection agency_id(string $label = null)
     * @method Grid\Column|Collection area(string $label = null)
     * @method Grid\Column|Collection area_code(string $label = null)
     * @method Grid\Column|Collection far_area(string $label = null)
     * @method Grid\Column|Collection nickname(string $label = null)
     * @method Grid\Column|Collection avatar_url(string $label = null)
     * @method Grid\Column|Collection gender(string $label = null)
     * @method Grid\Column|Collection real_name(string $label = null)
     * @method Grid\Column|Collection ipone(string $label = null)
     * @method Grid\Column|Collection language(string $label = null)
     * @method Grid\Column|Collection country(string $label = null)
     * @method Grid\Column|Collection openid(string $label = null)
     * @method Grid\Column|Collection uid(string $label = null)
     * @method Grid\Column|Collection mobile(string $label = null)
     * @method Grid\Column|Collection zip(string $label = null)
     * @method Grid\Column|Collection province_id(string $label = null)
     * @method Grid\Column|Collection city_id(string $label = null)
     * @method Grid\Column|Collection district_id(string $label = null)
     * @method Grid\Column|Collection is_default(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection order
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection category_id
     * @property Show\Field|Collection goods_name
     * @property Show\Field|Collection goods_shorttitle
     * @property Show\Field|Collection goods_keywords
     * @property Show\Field|Collection goods_property
     * @property Show\Field|Collection goods_description
     * @property Show\Field|Collection goods_price
     * @property Show\Field|Collection goods_original_price
     * @property Show\Field|Collection goods_cost
     * @property Show\Field|Collection goods_sell_num
     * @property Show\Field|Collection goods_stock
     * @property Show\Field|Collection goods_unit
     * @property Show\Field|Collection status
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection goods_id
     * @property Show\Field|Collection goods_key
     * @property Show\Field|Collection goods_value
     * @property Show\Field|Collection goods_desc
     * @property Show\Field|Collection order_sn
     * @property Show\Field|Collection remark
     * @property Show\Field|Collection order_status
     * @property Show\Field|Collection consignee_name
     * @property Show\Field|Collection consignee_mobile
     * @property Show\Field|Collection province
     * @property Show\Field|Collection city
     * @property Show\Field|Collection district
     * @property Show\Field|Collection address
     * @property Show\Field|Collection payment_method
     * @property Show\Field|Collection order_money
     * @property Show\Field|Collection district_money
     * @property Show\Field|Collection freight_money
     * @property Show\Field|Collection payment_money
     * @property Show\Field|Collection pay_time
     * @property Show\Field|Collection goods_amount
     * @property Show\Field|Collection checked
     * @property Show\Field|Collection goods_count
     * @property Show\Field|Collection goods_pic
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection pic_desc
     * @property Show\Field|Collection pic_url
     * @property Show\Field|Collection is_master
     * @property Show\Field|Collection pic_order
     * @property Show\Field|Collection pic_status
     * @property Show\Field|Collection agency_id
     * @property Show\Field|Collection area
     * @property Show\Field|Collection area_code
     * @property Show\Field|Collection far_area
     * @property Show\Field|Collection nickname
     * @property Show\Field|Collection avatar_url
     * @property Show\Field|Collection gender
     * @property Show\Field|Collection real_name
     * @property Show\Field|Collection ipone
     * @property Show\Field|Collection language
     * @property Show\Field|Collection country
     * @property Show\Field|Collection openid
     * @property Show\Field|Collection uid
     * @property Show\Field|Collection mobile
     * @property Show\Field|Collection zip
     * @property Show\Field|Collection province_id
     * @property Show\Field|Collection city_id
     * @property Show\Field|Collection district_id
     * @property Show\Field|Collection is_default
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection category_id(string $label = null)
     * @method Show\Field|Collection goods_name(string $label = null)
     * @method Show\Field|Collection goods_shorttitle(string $label = null)
     * @method Show\Field|Collection goods_keywords(string $label = null)
     * @method Show\Field|Collection goods_property(string $label = null)
     * @method Show\Field|Collection goods_description(string $label = null)
     * @method Show\Field|Collection goods_price(string $label = null)
     * @method Show\Field|Collection goods_original_price(string $label = null)
     * @method Show\Field|Collection goods_cost(string $label = null)
     * @method Show\Field|Collection goods_sell_num(string $label = null)
     * @method Show\Field|Collection goods_stock(string $label = null)
     * @method Show\Field|Collection goods_unit(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection goods_id(string $label = null)
     * @method Show\Field|Collection goods_key(string $label = null)
     * @method Show\Field|Collection goods_value(string $label = null)
     * @method Show\Field|Collection goods_desc(string $label = null)
     * @method Show\Field|Collection order_sn(string $label = null)
     * @method Show\Field|Collection remark(string $label = null)
     * @method Show\Field|Collection order_status(string $label = null)
     * @method Show\Field|Collection consignee_name(string $label = null)
     * @method Show\Field|Collection consignee_mobile(string $label = null)
     * @method Show\Field|Collection province(string $label = null)
     * @method Show\Field|Collection city(string $label = null)
     * @method Show\Field|Collection district(string $label = null)
     * @method Show\Field|Collection address(string $label = null)
     * @method Show\Field|Collection payment_method(string $label = null)
     * @method Show\Field|Collection order_money(string $label = null)
     * @method Show\Field|Collection district_money(string $label = null)
     * @method Show\Field|Collection freight_money(string $label = null)
     * @method Show\Field|Collection payment_money(string $label = null)
     * @method Show\Field|Collection pay_time(string $label = null)
     * @method Show\Field|Collection goods_amount(string $label = null)
     * @method Show\Field|Collection checked(string $label = null)
     * @method Show\Field|Collection goods_count(string $label = null)
     * @method Show\Field|Collection goods_pic(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection pic_desc(string $label = null)
     * @method Show\Field|Collection pic_url(string $label = null)
     * @method Show\Field|Collection is_master(string $label = null)
     * @method Show\Field|Collection pic_order(string $label = null)
     * @method Show\Field|Collection pic_status(string $label = null)
     * @method Show\Field|Collection agency_id(string $label = null)
     * @method Show\Field|Collection area(string $label = null)
     * @method Show\Field|Collection area_code(string $label = null)
     * @method Show\Field|Collection far_area(string $label = null)
     * @method Show\Field|Collection nickname(string $label = null)
     * @method Show\Field|Collection avatar_url(string $label = null)
     * @method Show\Field|Collection gender(string $label = null)
     * @method Show\Field|Collection real_name(string $label = null)
     * @method Show\Field|Collection ipone(string $label = null)
     * @method Show\Field|Collection language(string $label = null)
     * @method Show\Field|Collection country(string $label = null)
     * @method Show\Field|Collection openid(string $label = null)
     * @method Show\Field|Collection uid(string $label = null)
     * @method Show\Field|Collection mobile(string $label = null)
     * @method Show\Field|Collection zip(string $label = null)
     * @method Show\Field|Collection province_id(string $label = null)
     * @method Show\Field|Collection city_id(string $label = null)
     * @method Show\Field|Collection district_id(string $label = null)
     * @method Show\Field|Collection is_default(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
