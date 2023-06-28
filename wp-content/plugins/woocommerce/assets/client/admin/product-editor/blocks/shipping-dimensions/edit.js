"use strict";var __importDefault=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(exports,"__esModule",{value:!0}),exports.Edit=void 0;const block_editor_1=require("@wordpress/block-editor"),data_1=require("@woocommerce/data"),compose_1=require("@wordpress/compose"),core_data_1=require("@wordpress/core-data"),data_2=require("@wordpress/data"),element_1=require("@wordpress/element"),i18n_1=require("@wordpress/i18n"),classnames_1=__importDefault(require("classnames")),components_1=require("@wordpress/components"),use_product_helper_1=require("../../hooks/use-product-helper"),shipping_dimensions_image_1=require("../../components/shipping-dimensions-image"),use_validation_1=require("../../hooks/use-validation");function Edit({}){const e=(0,block_editor_1.useBlockProps)(),[t,n]=(0,core_data_1.useEntityProp)("postType","product","dimensions"),[o,i]=(0,core_data_1.useEntityProp)("postType","product","weight"),[s,r]=(0,element_1.useState)(),{formatNumber:l,parseNumber:a}=(0,use_product_helper_1.useProductHelper)(),{dimensionUnit:m,weightUnit:_}=(0,data_2.useSelect)((e=>{const{getOption:t}=e(data_1.OPTIONS_STORE_NAME);return{dimensionUnit:t("woocommerce_dimension_unit"),weightUnit:t("woocommerce_weight_unit")}}),[]);function c(e,o){return{name:`dimensions.${e}`,value:t?l(String(t[e])):void 0,onChange:o=>n({...null!=t?t:{},[e]:a(o)}),onFocus:()=>r(o),onBlur:()=>r(void 0),suffix:m}}const d={...c("width","A"),id:(0,compose_1.useInstanceId)(components_1.BaseControl,"product_shipping_dimensions_width")},u={...c("length","B"),id:(0,compose_1.useInstanceId)(components_1.BaseControl,"product_shipping_dimensions_length")},p={...c("height","C"),id:(0,compose_1.useInstanceId)(components_1.BaseControl,"product_shipping_dimensions_height")},h={id:(0,compose_1.useInstanceId)(components_1.BaseControl,"product_shipping_weight"),name:"weight",value:l(String(o)),onChange:e=>i(a(e)),suffix:_},g=(0,use_validation_1.useValidation)("product/dimensions/width",(function(){return!((null==t?void 0:t.width)&&+t.width<=0)})),w=(0,use_validation_1.useValidation)("product/dimensions/length",(function(){return!((null==t?void 0:t.length)&&+t.length<=0)})),E=(0,use_validation_1.useValidation)("product/dimensions/height",(function(){return!((null==t?void 0:t.height)&&+t.height<=0)})),v=(0,use_validation_1.useValidation)("product/weight",(function(){return!(o&&+o<=0)}));return(0,element_1.createElement)("div",{...e},(0,element_1.createElement)("h4",null,(0,i18n_1.__)("Dimensions","woocommerce")),(0,element_1.createElement)("div",{className:"wp-block-columns"},(0,element_1.createElement)("div",{className:"wp-block-column"},(0,element_1.createElement)(components_1.BaseControl,{id:d.id,label:(0,element_1.createInterpolateElement)((0,i18n_1.__)("Width <Side />","woocommerce"),{Side:(0,element_1.createElement)("span",null,"A")}),className:(0,classnames_1.default)({"has-error":!g}),help:g?void 0:(0,i18n_1.__)("Width must be higher than zero.","woocommerce")},(0,element_1.createElement)(components_1.__experimentalInputControl,{...d})),(0,element_1.createElement)(components_1.BaseControl,{id:u.id,label:(0,element_1.createInterpolateElement)((0,i18n_1.__)("Length <Side />","woocommerce"),{Side:(0,element_1.createElement)("span",null,"B")}),className:(0,classnames_1.default)({"has-error":!w}),help:w?void 0:(0,i18n_1.__)("Length must be higher than zero.","woocommerce")},(0,element_1.createElement)(components_1.__experimentalInputControl,{...u})),(0,element_1.createElement)(components_1.BaseControl,{id:p.id,label:(0,element_1.createInterpolateElement)((0,i18n_1.__)("Height <Side />","woocommerce"),{Side:(0,element_1.createElement)("span",null,"C")}),className:(0,classnames_1.default)({"has-error":!E}),help:E?void 0:(0,i18n_1.__)("Height must be higher than zero.","woocommerce")},(0,element_1.createElement)(components_1.__experimentalInputControl,{...p})),(0,element_1.createElement)(components_1.BaseControl,{id:h.id,label:(0,i18n_1.__)("Weight","woocommerce"),className:(0,classnames_1.default)({"has-error":!v}),help:v?void 0:(0,i18n_1.__)("Weight must be higher than zero.","woocommerce")},(0,element_1.createElement)(components_1.__experimentalInputControl,{...h}))),(0,element_1.createElement)("div",{className:"wp-block-column"},(0,element_1.createElement)(shipping_dimensions_image_1.ShippingDimensionsImage,{highlight:s,className:"wp-block-woocommerce-product-shipping-dimensions-fields__dimensions-image"}))))}exports.Edit=Edit;