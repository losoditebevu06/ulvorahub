<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UlvoraHub Pizzeria - Authentic Italian Pizza</title>
    <meta name="description" content="Experience the authentic taste of Italy at UlvoraHub Pizzeria. Our traditional recipes have been passed down through generations. Made with fresh ingredients and baked in our stone ovens. Click here to continue to discover our menu and story.">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f5f2;
            color: #333;
            line-height: 1.6;
        }
        
        .ulv_container_a7b3 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        .ulv_header_f9c2 {
            background-color: #d62828;
            color: white;
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .ulv_nav_wrapper_e4d8 {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .ulv_logo_b2f5 {
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }
        
        .ulv_nav_menu_c7a9 {
            display: flex;
            list-style: none;
        }
        
        .ulv_nav_item_h3j6 {
            margin-left: 25px;
        }
        
        .ulv_nav_link_k8l2 {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .ulv_nav_link_k8l2:hover {
            color: #ffd166;
        }
        
        /* Hero Section */
        .ulv_hero_section_m5n7 {
            background-image: url('https://cdn.pixabay.com/photo/2017/12/09/08/18/pizza-3007395_1280.jpg');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .ulv_hero_overlay_p9q1 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        .ulv_hero_content_r3s4 {
            position: relative;
            z-index: 1;
            color: white;
            max-width: 600px;
            padding: 0 20px;
        }
        
        .ulv_hero_title_t7u8 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .ulv_hero_subtitle_v2w3 {
            font-size: 20px;
            margin-bottom: 30px;
        }
        
        .ulv_btn_primary_x5y6 {
            display: inline-block;
            background-color: #e76f51;
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .ulv_btn_primary_x5y6:hover {
            background-color: #f4a261;
        }
        
        /* About Section */
        .ulv_section_a1b2 {
            padding: 80px 0;
        }
        
        .ulv_section_title_c3d4 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 50px;
            position: relative;
        }
        
        .ulv_section_title_c3d4::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: #d62828;
            margin: 15px auto 0;
        }
        
        .ulv_about_content_e5f6 {
            display: flex;
            align-items: center;
            gap: 40px;
        }
        
        .ulv_about_image_g7h8 {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .ulv_about_image_g7h8 img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .ulv_about_text_i9j0 {
            flex: 1;
        }
        
        .ulv_about_text_i9j0 h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #d62828;
        }
        
        .ulv_about_text_i9j0 p {
            margin-bottom: 15px;
        }
        
        /* Menu Section */
        .ulv_menu_section_k1l2 {
            background-color: #fff;
        }
        
        .ulv_menu_categories_m3n4 {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }
        
        .ulv_menu_category_o5p6 {
            padding: 10px 20px;
            margin: 0 10px;
            background-color: #f8f5f2;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .ulv_menu_category_o5p6.active {
            background-color: #d62828;
            color: white;
        }
        
        .ulv_menu_items_q7r8 {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .ulv_menu_item_s9t0 {
            background-color: #f8f5f2;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .ulv_menu_item_s9t0:hover {
            transform: translateY(-5px);
        }
        
        .ulv_menu_item_image_u1v2 {
            height: 200px;
            overflow: hidden;
        }
        
        .ulv_menu_item_image_u1v2 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .ulv_menu_item_info_w3x4 {
            padding: 20px;
        }
        
        .ulv_menu_item_title_y5z6 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        .ulv_menu_item_desc_a7b8 {
            color: #666;
            margin-bottom: 15px;
        }
        
        /* History Section */
        .ulv_history_section_c9d0 {
            background-color: #f8f5f2;
        }
        
        .ulv_timeline_e1f2 {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .ulv_timeline_e1f2::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #d62828;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }
        
        .ulv_timeline_item_g3h4 {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }
        
        .ulv_timeline_item_g3h4::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            background-color: white;
            border: 4px solid #d62828;
            border-radius: 50%;
            top: 15px;
            z-index: 1;
        }
        
        .ulv_timeline_item_g3h4:nth-child(odd) {
            left: 0;
        }
        
        .ulv_timeline_item_g3h4:nth-child(even) {
            left: 50%;
        }
        
        .ulv_timeline_item_g3h4:nth-child(odd)::after {
            right: -17px;
        }
        
        .ulv_timeline_item_g3h4:nth-child(even)::after {
            left: -17px;
        }
        
        .ulv_timeline_content_i5j6 {
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .ulv_timeline_year_k7l8 {
            font-weight: bold;
            color: #d62828;
            margin-bottom: 10px;
        }
        
        /* Testimonials Section */
        .ulv_testimonials_section_m9n0 {
            background-color: #fff;
        }
        
        .ulv_testimonials_grid_o1p2 {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .ulv_testimonial_card_q3r4 {
            background-color: #f8f5f2;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .ulv_testimonial_text_s5t6 {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
        }
        
        .ulv_testimonial_text_s5t6::before {
            content: '"';
            font-size: 60px;
            color: #d62828;
            position: absolute;
            top: -20px;
            left: -15px;
            opacity: 0.2;
        }
        
        .ulv_testimonial_author_u7v8 {
            display: flex;
            align-items: center;
        }
        
        .ulv_author_avatar_w9x0 {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }
        
        .ulv_author_avatar_w9x0 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .ulv_author_info_y1z2 h4 {
            margin-bottom: 5px;
        }
        
        .ulv_author_info_y1z2 p {
            color: #666;
            font-size: 14px;
        }
        
        /* Location Section */
        .ulv_location_section_a3b4 {
            background-color: #f8f5f2;
        }
        
        .ulv_location_content_c5d6 {
            display: flex;
            gap: 40px;
        }
        
        .ulv_location_info_e7f8 {
            flex: 1;
        }
        
        .ulv_location_map_g9h0 {
            flex: 1;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .ulv_location_map_g9h0 iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
        
        .ulv_address_block_i1j2 {
            margin-bottom: 30px;
        }
        
        .ulv_address_block_i1j2 h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #d62828;
        }
        
        .ulv_hours_list_k3l4 {
            list-style: none;
        }
        
        .ulv_hours_item_m5n6 {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #ddd;
        }
        
        /* Contact Section */
        .ulv_contact_section_o7p8 {
            background-color: #fff;
        }
        
        .ulv_contact_content_q9r0 {
            display: flex;
            gap: 40px;
        }
        
        .ulv_contact_info_s1t2 {
            flex: 1;
        }
        
        .ulv_contact_info_item_u3v4 {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }
        
        .ulv_contact_icon_w5x6 {
            width: 50px;
            height: 50px;
            background-color: #d62828;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-size: 20px;
        }
        
        .ulv_contact_text_y7z8 h3 {
            margin-bottom: 5px;
        }
        
        .ulv_contact_text_y7z8 p, .ulv_contact_text_y7z8 a {
            color: #666;
            text-decoration: none;
        }
        
        .ulv_contact_form_a9b0 {
            flex: 1;
        }
        
        .ulv_form_group_c1d2 {
            margin-bottom: 20px;
        }
        
        .ulv_form_label_e3f4 {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .ulv_form_input_g5h6, .ulv_form_textarea_i7j8 {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        .ulv_form_textarea_i7j8 {
            height: 150px;
            resize: vertical;
        }
        
        .ulv_btn_submit_k9l0 {
            background-color: #d62828;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .ulv_btn_submit_k9l0:hover {
            background-color: #b51d1d;
        }
        
        /* Footer */
        .ulv_footer_m1n2 {
            background-color: #333;
            color: white;
            padding: 60px 0 30px;
        }
        
        .ulv_footer_content_o3p4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .ulv_footer_column_q5r6 h3 {
            font-size: 20px;
            margin-bottom: 20px;
            position: relative;
        }
        
        .ulv_footer_column_q5r6 h3::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color: #d62828;
            margin-top: 10px;
        }
        
        .ulv_footer_links_s7t8 {
            list-style: none;
        }
        
        .ulv_footer_link_item_u9v0 {
            margin-bottom: 10px;
        }
        
        .ulv_footer_link_w1x2 {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .ulv_footer_link_w1x2:hover {
            color: #d62828;
        }
        
        .ulv_social_links_y3z4 {
            display: flex;
            gap: 15px;
        }
        
        .ulv_social_link_a5b6 {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: #444;
            border-radius: 50%;
            color: white;
            text-align: center;
            line-height: 40px;
            transition: background-color 0.3s;
        }
        
        .ulv_social_link_a5b6:hover {
            background-color: #d62828;
        }
        
        .ulv_footer_bottom_c7d8 {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #444;
        }
        
        .ulv_copyright_e9f0 {
            font-size: 14px;
            color: #aaa;
        }
        
        /* Modal Styles */
        .ulv_modal_g1h2 {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }
        
        .ulv_modal_content_i3j4 {
            background-color: #fff;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
        }
        
        .ulv_modal_close_k5l6 {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        
        .ulv_modal_close_k5l6:hover {
            color: #333;
        }
        
        .ulv_modal_title_m7n8 {
            margin-bottom: 20px;
            color: #d62828;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .ulv_about_content_e5f6,
            .ulv_location_content_c5d6,
            .ulv_contact_content_q9r0 {
                flex-direction: column;
            }
            
            .ulv_timeline_e1f2::after {
                left: 31px;
            }
            
            .ulv_timeline_item_g3h4 {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .ulv_timeline_item_g3h4:nth-child(even) {
                left: 0;
            }
            
            .ulv_timeline_item_g3h4:nth-child(odd)::after,
            .ulv_timeline_item_g3h4:nth-child(even)::after {
                left: 15px;
            }
        }
        
        @media (max-width: 768px) {
            .ulv_nav_wrapper_e4d8 {
                flex-direction: column;
            }
            
            .ulv_logo_b2f5 {
                margin-bottom: 15px;
            }
            
            .ulv_nav_menu_c7a9 {
                flex-direction: column;
                align-items: center;
            }
            
            .ulv_nav_item_h3j6 {
                margin: 5px 0;
            }
            
            .ulv_hero_title_t7u8 {
                font-size: 36px;
            }
            
            .ulv_section_title_c3d4 {
                font-size: 28px;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%30%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%30%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%30%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <!-- Header -->
    <header class="ulv_header_f9c2" id="top">
        <div class="ulv_container_a7b3">
            <div class="ulv_nav_wrapper_e4d8">
                <a href="#" class="ulv_logo_b2f5">UlvoraHub Pizzeria</a>
                <ul class="ulv_nav_menu_c7a9">
                    <li class="ulv_nav_item_h3j6"><a href="#top" class="ulv_nav_link_k8l2">Home</a></li>
                    <li class="ulv_nav_item_h3j6"><a href="#about" class="ulv_nav_link_k8l2">About</a></li>
                    <li class="ulv_nav_item_h3j6"><a href="#menu" class="ulv_nav_link_k8l2">Menu</a></li>
                    <li class="ulv_nav_item_h3j6"><a href="#history" class="ulv_nav_link_k8l2">Our History</a></li>
                    <li class="ulv_nav_item_h3j6"><a href="#testimonials" class="ulv_nav_link_k8l2">Testimonials</a></li>
                    <li class="ulv_nav_item_h3j6"><a href="#location" class="ulv_nav_link_k8l2">Location</a></li>
                    <li class="ulv_nav_item_h3j6"><a href="#contact" class="ulv_nav_link_k8l2">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="ulv_hero_section_m5n7">
        <div class="ulv_hero_overlay_p9q1"></div>
        <div class="ulv_container_a7b3">
            <div class="ulv_hero_content_r3s4">
                <h1 class="ulv_hero_title_t7u8">Authentic Italian Pizza</h1>
                <p class="ulv_hero_subtitle_v2w3">Experience the taste of Naples with our traditional wood-fired pizzas made with fresh, locally-sourced ingredients.</p>
                <a href="#menu" class="ulv_btn_primary_x5y6">Click here to continue</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="ulv_section_a1b2">
        <div class="ulv_container_a7b3">
            <h2 class="ulv_section_title_c3d4">About Us</h2>
            <div class="ulv_about_content_e5f6">
                <div class="ulv_about_image_g7h8">
                    <img src="https://cdn.pixabay.com/photo/2017/08/06/15/09/people-2593378_1280.jpg" alt="UlvoraHub Pizzeria Team">
                </div>
                <div class="ulv_about_text_i9j0">
                    <h3>Our Passion for Pizza</h3>
                    <p>At UlvoraHub Pizzeria, we believe that great pizza comes from passion, quality ingredients, and time-honored techniques. Our journey began with a simple desire to bring authentic Italian flavors to our community.</p>
                    <p>Each pizza is crafted with care using our secret family recipes that have been perfected over generations. We use only the freshest ingredients, from our homemade tomato sauce to our carefully selected toppings.</p>
                    <p>Our dedicated team of pizza artisans works tirelessly to ensure that every pizza that leaves our kitchen meets our exacting standards. We're not just making pizza – we're creating experiences and memories.</p>
                    <a href="#menu" class="ulv_btn_primary_x5y6">Click here to continue to our menu</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="ulv_section_a1b2 ulv_menu_section_k1l2">
        <div class="ulv_container_a7b3">
            <h2 class="ulv_section_title_c3d4">Our Menu</h2>
            <div class="ulv_menu_categories_m3n4">
                <div class="ulv_menu_category_o5p6 active">Classic Pizzas</div>
                <div class="ulv_menu_category_o5p6">Specialty Pizzas</div>
                <div class="ulv_menu_category_o5p6">Vegetarian Options</div>
                <div class="ulv_menu_category_o5p6">Sides & Salads</div>
            </div>
            <div class="ulv_menu_items_q7r8">
                <div class="ulv_menu_item_s9t0">
                    <div class="ulv_menu_item_image_u1v2">
                        <img src="https://cdn.pixabay.com/photo/2017/12/10/14/47/pizza-3010062_1280.jpg" alt="Margherita Pizza">
                    </div>
                    <div class="ulv_menu_item_info_w3x4">
                        <h3 class="ulv_menu_item_title_y5z6">Margherita</h3>
                        <p class="ulv_menu_item_desc_a7b8">Our classic Margherita pizza features San Marzano tomato sauce, fresh mozzarella, basil leaves, and a drizzle of extra virgin olive oil.</p>
                    </div>
                </div>
                <div class="ulv_menu_item_s9t0">
                    <div class="ulv_menu_item_image_u1v2">
                        <img src="https://cdn.pixabay.com/photo/2016/03/05/21/46/american-1239081_1280.jpg" alt="Pepperoni Pizza">
                    </div>
                    <div class="ulv_menu_item_info_w3x4">
                        <h3 class="ulv_menu_item_title_y5z6">Pepperoni</h3>
                        <p class="ulv_menu_item_desc_a7b8">A crowd favorite featuring our signature tomato sauce, mozzarella cheese, and generous slices of pepperoni.</p>
                    </div>
                </div>
                <div class="ulv_menu_item_s9t0">
                    <div class="ulv_menu_item_image_u1v2">
                        <img src="https://cdn.pixabay.com/photo/2016/04/21/22/50/pizza-1344720_1280.jpg" alt="Quattro Formaggi Pizza">
                    </div>
                    <div class="ulv_menu_item_info_w3x4">
                        <h3 class="ulv_menu_item_title_y5z6">Quattro Formaggi</h3>
                        <p class="ulv_menu_item_desc_a7b8">A cheese lover's dream with mozzarella, gorgonzola, fontina, and parmesan cheeses on our thin, crispy crust.</p>
                    </div>
                </div>
                <div class="ulv_menu_item_s9t0">
                    <div class="ulv_menu_item_image_u1v2">
                        <img src="https://cdn.pixabay.com/photo/2020/05/17/04/22/pizza-5179939_1280.jpg" alt="Vegetarian Pizza">
                    </div>
                    <div class="ulv_menu_item_info_w3x4">
                        <h3 class="ulv_menu_item_title_y5z6">Garden Veggie</h3>
                        <p class="ulv_menu_item_desc_a7b8">Loaded with fresh vegetables including bell peppers, mushrooms, red onions, black olives, and cherry tomatoes.</p>
                    </div>
                </div>
                <div class="ulv_menu_item_s9t0">
                    <div class="ulv_menu_item_image_u1v2">
                        <img src="https://cdn.pixabay.com/photo/2017/01/22/19/20/pizza-2000615_1280.jpg" alt="BBQ Chicken Pizza">
                    </div>
                    <div class="ulv_menu_item_info_w3x4">
                        <h3 class="ulv_menu_item_title_y5z6">BBQ Chicken</h3>
                        <p class="ulv_menu_item_desc_a7b8">Featuring grilled chicken, red onions, and cilantro on a BBQ sauce base with mozzarella cheese.</p>
                    </div>
                </div>
                <div class="ulv_menu_item_s9t0">
                    <div class="ulv_menu_item_image_u1v2">
                        <img src="https://cdn.pixabay.com/photo/2014/07/08/12/34/pizza-386717_1280.jpg" alt="Mediterranean Pizza">
                    </div>
                    <div class="ulv_menu_item_info_w3x4">
                        <h3 class="ulv_menu_item_title_y5z6">Mediterranean</h3>
                                                <p class="ulv_menu_item_desc_a7b8">A Mediterranean delight with feta cheese, kalamata olives, sun-dried tomatoes, artichoke hearts, and fresh oregano.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section id="history" class="ulv_section_a1b2 ulv_history_section_c9d0">
        <div class="ulv_container_a7b3">
            <h2 class="ulv_section_title_c3d4">Our History</h2>
            <div class="ulv_timeline_e1f2">
                <div class="ulv_timeline_item_g3h4">
                    <div class="ulv_timeline_content_i5j6">
                        <div class="ulv_timeline_year_k7l8">1952</div>
                        <h3>The Beginning</h3>
                        <p>Giuseppe Ulvora arrived in America from Naples, Italy, carrying with him generations of family pizza recipes and a dream to share authentic Italian flavors with his new community.</p>
                    </div>
                </div>
                <div class="ulv_timeline_item_g3h4">
                    <div class="ulv_timeline_content_i5j6">
                        <div class="ulv_timeline_year_k7l8">1958</div>
                        <h3>First Location Opens</h3>
                        <p>After years of perfecting his craft and saving money, Giuseppe opened the first UlvoraHub Pizzeria in a small storefront downtown. The wood-fired oven was built by hand using bricks imported from Italy.</p>
                    </div>
                </div>
                <div class="ulv_timeline_item_g3h4">
                    <div class="ulv_timeline_content_i5j6">
                        <div class="ulv_timeline_year_k7l8">1975</div>
                        <h3>Family Tradition Continues</h3>
                        <p>Giuseppe's son Marco joined the business, bringing fresh ideas while maintaining the traditional recipes. Together, they expanded the menu and introduced new cooking techniques.</p>
                    </div>
                </div>
                <div class="ulv_timeline_item_g3h4">
                    <div class="ulv_timeline_content_i5j6">
                        <div class="ulv_timeline_year_k7l8">1989</div>
                        <h3>Major Renovation</h3>
                        <p>The pizzeria underwent a complete renovation, doubling in size and adding a beautiful dining room while preserving the original wood-fired oven that had become the heart of the restaurant.</p>
                    </div>
                </div>
                <div class="ulv_timeline_item_g3h4">
                    <div class="ulv_timeline_content_i5j6">
                        <div class="ulv_timeline_year_k7l8">2003</div>
                        <h3>Third Generation</h3>
                        <p>Marco's daughter Sofia took over operations, bringing modern management techniques while fiercely protecting the family recipes and commitment to quality that made UlvoraHub famous.</p>
                    </div>
                </div>
                <div class="ulv_timeline_item_g3h4">
                    <div class="ulv_timeline_content_i5j6">
                        <div class="ulv_timeline_year_k7l8">2020</div>
                        <h3>Adapting to Change</h3>
                        <p>During challenging times, UlvoraHub adapted by offering delivery and takeout services while maintaining the same quality and care that customers had come to expect over six decades.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="ulv_section_a1b2 ulv_testimonials_section_m9n0">
        <div class="ulv_container_a7b3">
            <h2 class="ulv_section_title_c3d4">What Our Customers Say</h2>
            <div class="ulv_testimonials_grid_o1p2">
                <div class="ulv_testimonial_card_q3r4">
                    <div class="ulv_testimonial_text_s5t6">
                        The best pizza in town! I've been coming here for over 20 years and the quality never disappoints. The Margherita pizza is absolutely perfect - just like the ones I had in Italy.
                    </div>
                    <div class="ulv_testimonial_author_u7v8">
                        <div class="ulv_author_avatar_w9x0">
                            <img src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_1280.jpg" alt="Michael Thompson">
                        </div>
                        <div class="ulv_author_info_y1z2">
                            <h4>Michael Thompson</h4>
                            <p>Regular Customer</p>
                        </div>
                    </div>
                </div>
                <div class="ulv_testimonial_card_q3r4">
                    <div class="ulv_testimonial_text_s5t6">
                        UlvoraHub is our family's go-to place for special occasions. The atmosphere is warm and welcoming, and the staff treats us like family. The kids love the pepperoni pizza!
                    </div>
                    <div class="ulv_testimonial_author_u7v8">
                        <div class="ulv_author_avatar_w9x0">
                            <img src="https://cdn.pixabay.com/photo/2017/06/26/02/47/man-2442565_1280.jpg" alt="Sarah Johnson">
                        </div>
                        <div class="ulv_author_info_y1z2">
                            <h4>Sarah Johnson</h4>
                            <p>Local Family</p>
                        </div>
                    </div>
                </div>
                <div class="ulv_testimonial_card_q3r4">
                    <div class="ulv_testimonial_text_s5t6">
                        As someone who travels frequently for work, I can honestly say UlvoraHub serves some of the best pizza I've ever had. The crust is perfect and the ingredients are always fresh.
                    </div>
                    <div class="ulv_testimonial_author_u7v8">
                        <div class="ulv_author_avatar_w9x0">
                            <img src="https://cdn.pixabay.com/photo/2016/11/29/13/14/attractive-1869761_1280.jpg" alt="David Rodriguez">
                        </div>
                        <div class="ulv_author_info_y1z2">
                            <h4>David Rodriguez</h4>
                            <p>Business Traveler</p>
                        </div>
                    </div>
                </div>
                <div class="ulv_testimonial_card_q3r4">
                    <div class="ulv_testimonial_text_s5t6">
                        I'm vegetarian and UlvoraHub has amazing options for me. The Garden Veggie pizza is loaded with fresh vegetables and the cheese is incredible. Highly recommend!
                    </div>
                    <div class="ulv_testimonial_author_u7v8">
                        <div class="ulv_author_avatar_w9x0">
                            <img src="https://cdn.pixabay.com/photo/2017/08/01/01/33/beanie-2562646_1280.jpg" alt="Emma Wilson">
                        </div>
                        <div class="ulv_author_info_y1z2">
                            <h4>Emma Wilson</h4>
                            <p>Food Blogger</p>
                        </div>
                    </div>
                </div>
                <div class="ulv_testimonial_card_q3r4">
                    <div class="ulv_testimonial_text_s5t6">
                        The wood-fired oven makes all the difference. You can taste the authenticity in every bite. This place has been a neighborhood gem for decades and it shows.
                    </div>
                    <div class="ulv_testimonial_author_u7v8">
                        <div class="ulv_author_avatar_w9x0">
                            <img src="https://cdn.pixabay.com/photo/2016/11/21/14/53/man-1845814_1280.jpg" alt="Robert Chen">
                        </div>
                        <div class="ulv_author_info_y1z2">
                            <h4>Robert Chen</h4>
                            <p>Local Resident</p>
                        </div>
                    </div>
                </div>
                <div class="ulv_testimonial_card_q3r4">
                    <div class="ulv_testimonial_text_s5t6">
                        Outstanding service and even better pizza! The staff is knowledgeable about ingredients and always makes great recommendations. This is authentic Italian at its finest.
                    </div>
                    <div class="ulv_testimonial_author_u7v8">
                        <div class="ulv_author_avatar_w9x0">
                            <img src="https://cdn.pixabay.com/photo/2017/11/02/14/27/model-2911363_1280.jpg" alt="Lisa Martinez">
                        </div>
                        <div class="ulv_author_info_y1z2">
                            <h4>Lisa Martinez</h4>
                            <p>Restaurant Critic</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="ulv_section_a1b2 ulv_location_section_a3b4">
        <div class="ulv_container_a7b3">
            <h2 class="ulv_section_title_c3d4">Visit Us</h2>
            <div class="ulv_location_content_c5d6">
                <div class="ulv_location_info_e7f8">
                    <div class="ulv_address_block_i1j2">
                        <h3>Location</h3>
                        <p>1247 Oak Street<br>
                        Downtown District<br>
                        Springfield, IL 62701</p>
                    </div>
                    <div class="ulv_address_block_i1j2">
                        <h3>Hours of Operation</h3>
                        <ul class="ulv_hours_list_k3l4">
                            <li class="ulv_hours_item_m5n6">
                                <span>Monday - Thursday</span>
                                <span>11:00 AM - 10:00 PM</span>
                            </li>
                            <li class="ulv_hours_item_m5n6">
                                <span>Friday - Saturday</span>
                                <span>11:00 AM - 11:00 PM</span>
                            </li>
                            <li class="ulv_hours_item_m5n6">
                                <span>Sunday</span>
                                <span>12:00 PM - 9:00 PM</span>
                            </li>
                        </ul>
                    </div>
                    <div class="ulv_address_block_i1j2">
                        <h3>Parking Information</h3>
                        <p>Free parking is available in our dedicated lot behind the restaurant. Street parking is also available on Oak Street and surrounding streets. We're easily accessible by public transportation with bus stops just two blocks away.</p>
                        <a href="#contact" class="ulv_btn_primary_x5y6">Click here to continue to contact us</a>
                    </div>
                </div>
                <div class="ulv_location_map_g9h0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.4037!2d-89.6501!3d39.7817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMznCsDQ2JzU0LjEiTiA4OcKwMzknMDAuNCJX!5e0!3m2!1sen!2sus!4v1234567890" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="ulv_section_a1b2 ulv_contact_section_o7p8">
        <div class="ulv_container_a7b3">
            <h2 class="ulv_section_title_c3d4">Contact Us</h2>
            <div class="ulv_contact_content_q9r0">
                <div class="ulv_contact_info_s1t2">
                    <div class="ulv_contact_info_item_u3v4">
                        <div class="ulv_contact_icon_w5x6">📞</div>
                        <div class="ulv_contact_text_y7z8">
                            <h3>Phone</h3>
                            <p><a href="tel:+15551234567">(555) 123-4567</a></p>
                        </div>
                    </div>
                    <div class="ulv_contact_info_item_u3v4">
                        <div class="ulv_contact_icon_w5x6">✉️</div>
                        <div class="ulv_contact_text_y7z8">
                            <h3>Email</h3>
                            <p>info@ulvorahub.com</p>
                        </div>
                    </div>
                    <div class="ulv_contact_info_item_u3v4">
                        <div class="ulv_contact_icon_w5x6">📍</div>
                        <div class="ulv_contact_text_y7z8">
                            <h3>Address</h3>
                            <p>1247 Oak Street<br>Springfield, IL 62701</p>
                        </div>
                    </div>
                    <div class="ulv_contact_info_item_u3v4">
                        <div class="ulv_contact_icon_w5x6">🕒</div>
                        <div class="ulv_contact_text_y7z8">
                            <h3>Delivery Hours</h3>
                            <p>Monday - Sunday<br>5:00 PM - 10:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="ulv_contact_form_a9b0">
                    <form>
                        <div class="ulv_form_group_c1d2">
                            <label for="name" class="ulv_form_label_e3f4">Full Name</label>
                            <input type="text" id="name" name="name" class="ulv_form_input_g5h6" required>
                        </div>
                        <div class="ulv_form_group_c1d2">
                            <label for="email" class="ulv_form_label_e3f4">Email Address</label>
                            <input type="email" id="email" name="email" class="ulv_form_input_g5h6" required>
                        </div>
                        <div class="ulv_form_group_c1d2">
                            <label for="phone" class="ulv_form_label_e3f4">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="ulv_form_input_g5h6">
                        </div>
                        <div class="ulv_form_group_c1d2">
                            <label for="message" class="ulv_form_label_e3f4">Message</label>
                            <textarea id="message" name="message" class="ulv_form_textarea_i7j8" required></textarea>
                        </div>
                        <button type="submit" class="ulv_btn_submit_k9l0">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="ulv_footer_m1n2">
        <div class="ulv_container_a7b3">
            <div class="ulv_footer_content_o3p4">
                <div class="ulv_footer_column_q5r6">
                    <h3>UlvoraHub Pizzeria</h3>
                    <p>Serving authentic Italian pizza since 1958. Our family recipes and traditional cooking methods ensure every pizza is a masterpiece.</p>
                    <div class="ulv_social_links_y3z4">
                        <a href="#" class="ulv_social_link_a5b6">📘</a>
                        <a href="#" class="ulv_social_link_a5b6">📷</a>
                        <a href="#" class="ulv_social_link_a5b6">🐦</a>
                        <a href="#" class="ulv_social_link_a5b6">📺</a>
                    </div>
                </div>
                <div class="ulv_footer_column_q5r6">
                    <h3>Quick Links</h3>
                    <ul class="ulv_footer_links_s7t8">
                        <li class="ulv_footer_link_item_u9v0"><a href="#about" class="ulv_footer_link_w1x2">About Us</a></li>
                        <li class="ulv_footer_link_item_u9v0"><a href="#menu" class="ulv_footer_link_w1x2">Our Menu</a></li>
                        <li class="ulv_footer_link_item_u9v0"><a href="#history" class="ulv_footer_link_w1x2">Our History</a></li>
                        <li class="ulv_footer_link_item_u9v0"><a href="#location" class="ulv_footer_link_w1x2">Location</a></li>
                        <li class="ulv_footer_link_item_u9v0"><a href="#contact" class="ulv_footer_link_w1x2">Contact</a></li>
                    </ul>
                </div>
                <div class="ulv_footer_column_q5r6">
                    <h3>Contact Info</h3>
                    <ul class="ulv_footer_links_s7t8">
                        <li class="ulv_footer_link_item_u9v0">📞 <a href="tel:+15551234567" class="ulv_footer_link_w1x2">(555) 123-4567</a></li>
                        <li class="ulv_footer_link_item_u9v0">✉️ info@ulvorahub.com</li>
                        <li class="ulv_footer_link_item_u9v0">📍 1247 Oak Street, Springfield, IL</li>
                        <li class="ulv_footer_link_item_u9v0">🕒 Mon-Thu: 11AM-10PM</li>
                        <li class="ulv_footer_link_item_u9v0">🕒 Fri-Sat: 11AM-11PM</li>
                        <li class="ulv_footer_link_item_u9v0">🕒 Sun: 12PM-9PM</li>
                    </ul>
                </div>
                <div class="ulv_footer_column_q5r6">
                    <h3>Legal</h3>
                    <ul class="ulv_footer_links_s7t8">
                        <li class="ulv_footer_link_item_u9v0"><a href="#" class="ulv_footer_link_w1x2" onclick="openModal('privacy')">Privacy Policy</a></li>
                        <li class="ulv_footer_link_item_u9v0"><a href="#" class="ulv_footer_link_w1x2" onclick="openModal('terms')">Terms of Service</a></li>
                        <li class="ulv_footer_link_item_u9v0"><a href="#contact" class="ulv_footer_link_w1x2">Feedback</a></li>
                        <li class="ulv_footer_link_item_u9v0"><a href="#" class="ulv_footer_link_w1x2">Careers</a></li>
                    </ul>
                </div>
            </div>
            <div class="ulv_footer_bottom_c7d8">
                <p class="ulv_copyright_e9f0">© 2024 UlvoraHub Pizzeria. All rights reserved. Established 1958.</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="ulv_modal_g1h2">
        <div class="ulv_modal_content_i3j4">
            <span class="ulv_modal_close_k5l6" onclick="closeModal('privacy')">×</span>
            <h2 class="ulv_modal_title_m7n8">Privacy Policy</h2>
            <p><strong>Last updated:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>At UlvoraHub Pizzeria, we collect information you provide directly to us, such as when you make a reservation, place an order, sign up for our newsletter, or contact us for customer service.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Process and fulfill your orders</li>
                <li>Communicate with you about your orders and our services</li>
                <li>Send you promotional materials (with your consent)</li>
                <li>Improve our services and customer experience</li>
                <li>Comply with legal obligations</li>
            </ul>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share your information with:</p>
            <ul>
                <li>Service providers who assist us in operating our business</li>
                <li>Law enforcement when required by law</li>
                <li>Business partners for joint promotional activities (with your consent)</li>
            </ul>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to:</p>
            <ul>
                <li>Access your personal information</li>
                <li>Correct inaccurate information</li>
                <li>Request deletion of your information</li>
                <li>Opt-out of marketing communications</li>
            </ul>
            
            <h3>Cookies</h3>
            <p>We use cookies to enhance your experience on our website. You can choose to disable cookies through your browser settings.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@ulvorahub.com or (555) 123-4567.</p>
            
            <a href="#contact" class="ulv_btn_primary_x5y6" onclick="closeModal('privacy')">Click here to continue to contact us</a>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="termsModal" class="ulv_modal_g1h2">
        <div class="ulv_modal_content_i3j4">
            <span class="ulv_modal_close_k5l6" onclick="closeModal('terms')">×</span>
            <h2 class="ulv_modal_title_m7n8">Terms of Service</h2>
            <p><strong>Last updated:</strong> January 1, 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using UlvoraHub Pizzeria's services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Use of Services</h3>
            <p>You may use our services for lawful purposes only. You agree not to use the services:</p>
            <ul>
                <li>In any way that violates applicable laws or regulations</li>
                <li>To transmit or procure the sending of any advertising or promotional material</li>
                <li>To impersonate or attempt to impersonate the company or employees</li>
                <li>To engage in any other conduct that restricts or inhibits anyone's use of the services</li>
            </ul>
            
            <h3>Orders and Payment</h3>
            <p>All orders are subject to acceptance and availability. We reserve the right to refuse or cancel any order. Payment is due at the time of order placement.</p>
            
            <h3>Delivery and Pickup</h3>
            <p>Delivery times are estimates and may vary based on location and demand. We are not responsible for delays caused by weather, traffic, or other circumstances beyond our control.</p>
            
            <h3>Food Safety and Allergies</h3>
            <p>Please inform us of any food allergies or dietary restrictions. While we take precautions, we cannot guarantee that our food is free from allergens.</p>
            
            <h3>Limitation of Liability</h3>
            <p>UlvoraHub Pizzeria shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services.</p>
            
            <h3>Modifications</h3>
            <p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting on our website.</p>
            
            <h3>Governing Law</h3>
            <p>These terms shall be governed by and construed in accordance with the laws of the State of Illinois.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these Terms of Service, please contact us at info@ulvorahub.com or (555) 123-4567.</p>
        </div>
    </div>

    <script>
        // Modal functionality
        function openModal(type) {
            if (type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'block';
            } else if (type === 'terms') {
                document.getElementById('termsModal').style.display = 'block';
            }
        }

        function closeModal(type) {
            if (type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'none';
            } else if (type === 'terms') {
                document.getElementById('termsModal').style.display = 'none';
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacyModal');
            const termsModal = document.getElementById('termsModal');
            if (event.target === privacyModal) {
                privacyModal.style.display = 'none';
            }
            if (event.target === termsModal) {
                termsModal.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });

        // Menu category switching
        document.querySelectorAll('.ulv_menu_category_o5p6').forEach(category => {
            category.addEventListener('click', function() {
                document.querySelectorAll('.ulv_menu_category_o5p6').forEach(cat => {
                    cat.classList.remove('active');
                });
                this.classList.add('active');
            });
        });

        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Animate elements on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe menu items and testimonials
            document.querySelectorAll('.ulv_menu_item_s9t0, .ulv_testimonial_card_q3r4').forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(item);
            });
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>




