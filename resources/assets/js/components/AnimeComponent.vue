<template>
	<div>
		<div class="card mb-1">
			<a :href="url()">
				<img class="card-img-top" :src="image_src()">
			</a>
		</div>
		<span><b>{{anime.anime}}</b></span>
		<span v-if="needChapter()"><b>capitulo {{anime.chapter}}</b></span>
		<div class="text-center">
			<span class="badge badge-dark m-1" v-for="genre of genres">
				<a :href="searchGenre(genre.genre)">{{ genre.genre}}</a>
			</span>
		</div>
	</div>
</template>

<script>
    export default {
		props: [
			'anime', 'image', 'genres'
		],
        mounted() {
        },
		methods:{
			image_src(){
				return "/images/" + this.image + '.jpg'
			},
			url(){
				if(this.anime.chapter){
					return "/watch?anime=" + this.anime.anime + "&capitulo=" + this.anime.chapter
				}else{
					return "/animes/" + this.anime.anime
				}
			},
			needChapter(){
				return !!this.anime.chapter
			},
			searchGenre(genre){
				return "/filtro/anime?genre=" + genre
			}
		}
    }
</script>
