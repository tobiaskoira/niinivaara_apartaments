<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div className="relative text-center">
  <img
     src="https://hips.hearstapps.com/hmg-prod/images/ground-cover-flowers-1-6477baad1ae88.jpg?crop=1xw:0.675xh;center,top&resize=1200:*"
      alt="img"
   />
   <div className="w-full absolute top-0 left-0 text-center mt-10">
      <h2 className="text-4xl font-bold text-red-500 text-center">
         TailwindCSS + React
      </h2>
      <button className="mt-10 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Test Button
      </button>
    </div>
</div>
<div className="text-center mb-10">
    <h2 className="text-2xl font-bold">Text 2</h2>
    <button className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
       Test Button 2
    </button>
 </div>













