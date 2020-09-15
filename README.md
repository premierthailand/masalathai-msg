# masalathai-msg

SELECT location.location_id,location.location_name,detail.detail_img,detail.detail_comment,messenger.msg_name,messenger.msg_tel,detail.detail_status,detail.detail_deliver_time
FROM location
	INNER JOIN detail  ON detail.location_id = location.location_id
    	INNER JOIN messenger ON messenger.msg_id = detail.msg_id
