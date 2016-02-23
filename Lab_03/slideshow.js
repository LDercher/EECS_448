

	var imageNum = 0;
	imageArray = new Array();
	imageArray[imageNum++] = new imageItem("slides/colorado_sign.jpg");
	imageArray[imageNum++] = new imageItem("slides/couple_pic.jpg");
	imageArray[imageNum++] = new imageItem("slides/family_castle.jpg");
	imageArray[imageNum++] = new imageItem("slides/family_mountain.jpg");
	imageArray[imageNum++] = new imageItem("slides/colorado_stream.jpg");
	imageArray[imageNum++] = new imageItem("slides/silly_faces.jpg");
	imageArray[imageNum++] = new imageItem("slides/tool_concert.jpg");
	imageArray[imageNum++] = new imageItem("slides/colorado_rocks.jpg");
	imageArray[imageNum++] = new imageItem("slides/wedding.jpg");
	imageArray[imageNum++] = new imageItem("slides/throne.jpg");
	

	function imageItem(image_location) 
	{
	    this.image_item = new Image();
	    this.image_item.src = image_location;
	}

	function get_ImageItemLocation(imageObj) 
	{
	    return(imageObj.image_item.src)
	}
	
	function getNextImage() 
	{
		imageNum = (imageNum+1) % 10;
		var new_image = get_ImageItemLocation(imageArray[imageNum]);
		return(new_image);
	}
	
	function getPrevImage()
	{
		if(imageNum-1 < 0)
		{
			imageNum = 10-1;		}
		else
		imageNum = (imageNum-1) % 10;

		var new_image = get_ImageItemLocation(imageArray[imageNum]);
		return(new_image);
	}

	
	function prevImage(place) 
	{
	    var new_image = getPrevImage();
	    document[place].src = new_image;
	}
	
	function switchImage(place) 
	{
	    var new_image = getNextImage();
	    document[place].src = new_image;
	    var recur_call = "switchImage('"+place+"')";
	    timerID = setTimeout(recur_call, 5000);
	}
	