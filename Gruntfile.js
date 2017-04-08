module.exports = function(grunt) {

  grunt.initConfig({
    less: {      
      options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
      files: {
        '/css/style.css': 'style.less'
      },
    },
    
  });

  grunt.loadNpmTasks('grunt-contrib-less');

  grunt.registerTask('default', ['less']);

};