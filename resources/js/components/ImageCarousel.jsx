import React from 'react';
import Slider from 'react-slick';
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

const ImageCarousel = () => {

    const settings = {
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
    };


    return (
        // <div className="w-full h-40 sm:h-44 md:h-52 lg:h-[300px] xl:h-[400px]">
        //     <Slider {...settings}>
        //         {images.map((image, index) => (
        //             <div key={index}>
        //                 <img
        //                     src={`/storage/${image.image_path}`}
        //                     alt={`Image ${index + 1}`}
        //                     className="w-full h-full object-cover rounded-lg"
        //                 />
        //             </div>
        //         ))}
        //     </Slider>
        // </div>
        <div>
            <h1>hello world</h1>
        </div>
    );
}
export default ImageCarousel;
