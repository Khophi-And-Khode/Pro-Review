<?php


/**
 * 
 */
class CloudinaryAccess {
	
	public static function uploadImage($pub_id, $img_path, $url_path = "web/") {
		
    $uploadResult = \Cloudinary\Uploader::upload($img_path,
        array("folder" => $url_path, "public_id" => "khophi_".$pub_id, "overwrite" => TRUE,
            "resource_type" => "image"
        )
        );
        return $secureUrl = $uploadResult['secure_url'];
	}

    public static function censor($img_path) {
        return \Cloudinary\Uploader::upload($img_path, 
        array("moderation" => "aws_rek:female_underwear:0.85:explicit_nudity:0.7:revealing_clothes:ignore"));
    }
}