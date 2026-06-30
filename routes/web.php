<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/AboutUs', function () {
    return view('AboutUs');
})->name('AboutUs');

Route::get('/Developers', function () {
    return view('Dev/Developers');
})->name('Developers');

// Front End Routes Start Here
Route::get('/FrontEnd', function () {
    return view('Dev/FrontEnd/FrontEnd');
})->name('FrontEnd');
Route::get('/MDNWebDocs', function () {
    return view('Dev/FrontEnd/MDNWebDocs');
})->name('MDNWebDocs');
Route::get('/StackBlitz', function () {
    return view('Dev/FrontEnd/StackBlitz');
})->name('StackBlitz');

Route::get('/W3Schools', function () {
    return view('Dev/FrontEnd/W3Schools');
})->name('W3Schools');

Route::get('/WebDev', function () {
    return view('Dev/FrontEnd/WebDev');
})->name('WebDev');

Route::get('/FrontendMentor', function () {
    return view('Dev/FrontEnd/FrontendMentor');
})->name('FrontendMentor');

Route::get('/CollectUI', function () {
    return view('Dev/FrontEnd/CollectUI');
})->name('CollectUI');

Route::get('/CSSTricks', function () {
    return view('Dev/FrontEnd/CSSTricks');
})->name('CSSTricks');
Route::get('/Animista', function () {
    return view('Dev/FrontEnd/Animista');
})->name('Animista');

Route::get('/UIGradients', function () {
    return view('Dev/FrontEnd/UIGradients');
})->name('UIGradients');

Route::get('/Neumorphismio', function () {
    return view('Dev/FrontEnd/Neumorphismio');
})->name('Neumorphismio');

Route::get('/CodePen', function () {
    return view('Dev/FrontEnd/CodePen');
})->name('CodePen');

Route::get('/CodeSandbox', function () {
    return view('Dev/FrontEnd/CodeSandbox');
})->name('CodeSandbox');

Route::get('/FontAwesome', function () {
    return view('Dev/FrontEnd/FontAwesome');
})->name('FontAwesome');

Route::get('/RoadmapSh', function () {
    return view('Dev/FrontEnd/RoadmapSh');
})->name('RoadmapSh');
Route::get('/LucideIcons', function () {
    return view('Dev/FrontEnd/LucideIcons');
})->name('LucideIcons');

Route::get('/UiverseIo', function () {
    return view('Dev/FrontEnd/UiverseIo');
})->name('UiverseIo');

Route::get('/caniuse', function () {
    return view('Dev/FrontEnd/caniuse');
})->name('caniuse');

Route::get('/GitHub', function () {
    return view('Dev/FrontEnd/GitHub');
})->name('GitHub');

Route::get('/Netlify', function () {
    return view('Dev/FrontEnd/Netlify');
})->name('Netlify');
Route::get('/Vercel', function () {
    return view('Dev/FrontEnd/Vercel');
})->name('Vercel');

Route::get('/freeCodeCamp', function () {
    return view('Dev/FrontEnd/freeCodeCamp');
})->name('freeCodeCamp');

Route::get('/JSFiddle', function () {
    return view('Dev/FrontEnd/JSFiddle');
})->name('JSFiddle');


Route::get('/UniverseWebsiteBuilder', function () {
    return view('Dev/FrontEnd/UniverseWebsiteBuilder');
})->name('UniverseWebsiteBuilder');

Route::get('/MagicUI', function () {
    return view('Dev/FrontEnd/MagicUI');
})->name('MagicUI');

Route::get('/Bootstrap', function () {
    return view('Dev/FrontEnd/Bootstrap');
})->name('Bootstrap');

Route::get('/Tailwind', function () {
    return view('Dev/FrontEnd/Tailwind');
})->name('Tailwind');

Route::get('/Scrimba', function () {
    return view('Dev/FrontEnd/Scrimba');
})->name('Scrimba');

Route::get('/OnePageLove', function () {
    return view('Dev/FrontEnd/OnePageLove');
})->name('OnePageLove');

Route::get('/LapaNinja', function () {
    return view('Dev/FrontEnd/LapaNinja');
})->name('LapaNinja');

Route::get('/ResponsivelyApp', function () {
    return view('Dev/FrontEnd/ResponsivelyApp');
})->name('ResponsivelyApp');

Route::get('/Figma', function () {
    return view('Dev/FrontEnd/Figma');
})->name('Figma');

Route::get('/PageSpeedInsights', function () {
    return view('Dev/FrontEnd/PageSpeedInsights');
})->name('PageSpeedInsights');

Route::get('/DaisyUI', function () {
    return view('Dev/FrontEnd/DaisyUI');
})->name('DaisyUI');


Route::get('/RemoveBg', function () {
    return view('Dev/FrontEnd/RemoveBg');
})->name('RemoveBg');

// Front End Routes End Here

// Back End Routes Start Here
Route::get('/BackEnd', function () {
    return view('Dev/BackEnd/BackEnd');
})->name('BackEnd');

Route::get('/DrawIo', function () {
    return view('Dev/BackEnd/DrawIo');
})->name('DrawIo');
Route::get('/Insomnia', function () {
    return view('Dev/BackEnd/Insomnia');
})->name('Insomnia');

Route::get('/dbdiagramIo', function () {
    return view('Dev/BackEnd/dbdiagramIo');
})->name('dbdiagramIo');

Route::get('/DevDocsIo', function () {
    return view('Dev/BackEnd/DevDocsIo');
})->name('DevDocsIo');

Route::get('/Hoppscotch', function () {
    return view('Dev/BackEnd/Hoppscotch');
})->name('Hoppscotch');

Route::get('/Postman', function () {
    return view('Dev/BackEnd/Postman');
})->name('Postman');
Route::get('/JSONPlaceholder', function () {
    return view('Dev/BackEnd/JSONPlaceholder');
})->name('JSONPlaceholder');

Route::get('/Regex101', function () {
    return view('Dev/BackEnd/Regex101');
})->name('Regex101');

Route::get('/ByteByteGo', function () {
    return view('Dev/BackEnd/ByteByteGo');
})->name('ByteByteGo');

Route::get('/EraserIo', function () {
    return view('Dev/BackEnd/EraserIo');
})->name('EraserIo');

Route::get('/Excalidraw', function () {
    return view('Dev/BackEnd/Excalidraw');
})->name('Excalidraw');

Route::get('/Firebase', function () {
    return view('Dev/BackEnd/Firebase');
})->name('Firebase');

Route::get('/Supabase', function () {
    return view('Dev/BackEnd/Supabase');
})->name('Supabase');

Route::get('/Railway', function () {
    return view('Dev/BackEnd/Railway');
})->name('Railway');

Route::get('/Render', function () {
    return view('Dev/BackEnd/Render');
})->name('Render');

Route::get('/OWASP', function () {
    return view('Dev/BackEnd/OWASP');
})->name('OWASP');

Route::get('/K6Io', function () {
    return view('Dev/BackEnd/K6Io');
})->name('K6Io');

Route::get('/StackOverflow', function () {
    return view('Dev/BackEnd/StackOverflow');
})->name('StackOverflow');

Route::get('/GeeksforGeeks', function () {
    return view('Dev/BackEnd/GeeksforGeeks');
})->name('GeeksforGeeks');

Route::get('/Swagger', function () {
    return view('Dev/BackEnd/Swagger');
})->name('Swagger');

Route::get('/MongoDB', function () {
    return view('Dev/BackEnd/MongoDB');
})->name('MongoDB');

Route::get('/MySQL', function () {
    return view('Dev/BackEnd/MySQL');
})->name('MySQL');

Route::get('/PostgreSQL', function () {
    return view('Dev/BackEnd/PostgreSQL');
})->name('PostgreSQL');

Route::get('/Redis', function () {
    return view('Dev/BackEnd/Redis');
})->name('Redis');

Route::get('/Heroku', function () {
    return view('Dev/BackEnd/Heroku');
})->name('Heroku');

Route::get('/DigitalOcean', function () {
    return view('Dev/BackEnd/DigitalOcean');
})->name('DigitalOcean');

Route::get('/JWTIo', function () {
    return view('Dev/BackEnd/JWTIo');
})->name('JWTIo');

Route::get('/HaveIBeenPwned', function () {
    return view('Dev/BackEnd/HaveIBeenPwned');
})->name('HaveIBeenPwned');

Route::get('/Docker', function () {
    return view('Dev/BackEnd/Docker');
})->name('Docker');

Route::get('/Cloudinary', function () {
    return view('Dev/BackEnd/Cloudinary');
})->name('Cloudinary');

Route::get('/Spatie', function () {
    return view('Dev/BackEnd/Spatie');
})->name('Spatie');

//   Back End Routes End Here

Route::get('/MobileApp', function () {

    return view('Dev/Mobile/MobileApp');
})->name('MobileApp');

Route::get('/AndroidDevelopers', function () {

    return view('Dev/Mobile/AndroidDevelopers');
})->name('AndroidDevelopers');

Route::get('/AppleDeveloper', function () {

    return view('Dev/Mobile/AppleDeveloper');
})->name('AppleDeveloper');
Route::get('/AppGyver', function () {

    return view('Dev/Mobile/AppGyver');
})->name('AppGyver');

Route::get('/FlutterDev', function () {

    return view('Dev/Mobile/FlutterDev');
})->name('FlutterDev');

Route::get('/ReactNativeDev', function () {

    return view('Dev/Mobile/ReactNativeDev');
})->name('ReactNativeDev');


Route::get('/pubDev', function () {

    return view('Dev/Mobile/pubDev');
})->name('pubDev');

Route::get('/npm', function () {

    return view('Dev/Mobile/npm');
})->name('npm');

Route::get('/MaterialDesign', function () {
    return view('Dev/Mobile/MaterialDesign');
})->name('MaterialDesign');

Route::get('/RiveApp', function () {
    return view('Dev/Mobile/RiveApp');
})->name('RiveApp');

Route::get('/v0Dev', function () {
    return view('Dev/Mobile/v0Dev');
})->name('v0Dev');

Route::get('/Codemagic', function () {
    return view('Dev/Mobile/Codemagic');
})->name('Codemagic');

Route::get('/ExpoApplicationServices', function () {
    return view('Dev/Mobile/ExpoApplicationServices');
})->name('ExpoApplicationServices');

Route::get('/AppIconGenerator', function () {
    return view('Dev/Mobile/AppIconGenerator');
})->name('AppIconGenerator');

Route::get('/Haikei', function () {
    return view('Dev/Mobile/Haikei');
})->name('Haikei');

Route::get('/Diawi', function () {
    return view('Dev/Mobile/Diawi');
})->name('Diawi');

Route::get('/BrowserStack', function () {
    return view('Dev/Mobile/BrowserStack');
})->name('BrowserStack');

Route::get('/JSONCrack', function () {
    return view('Dev/Mobile/JSONCrack');
})->name('JSONCrack');

Route::get('/Mockoon', function () {
    return view('Dev/Mobile/Mockoon');
})->name('Mockoon');
Route::get('/mockapi', function () {
    return view('Dev/Mobile/mockapi');
})->name('mockapi');
Route::get('/Appradar', function () {
    return view('Dev/Mobile/Appradar');
})->name('Appradar');
Route::get('/RevenueCat', function () {
    return view('Dev/Mobile/RevenueCat');
})->name('RevenueCat');

Route::get('/OneSignal', function () {
    return view('Dev/Mobile/OneSignal');
})->name('OneSignal');

Route::get('/AppFollow', function () {
    return view('Dev/Mobile/AppFollow');
})->name('AppFollow');

Route::get('/DataAi', function () {
    return view('Dev/Mobile/DataAi');
})->name('DataAi');

Route::get('/SensorTower', function () {
    return view('Dev/Mobile/SensorTower');
})->name('SensorTower');

Route::get('/medium', function () {
    return view('Dev/Mobile/medium');
})->name('medium');

Route::get('/FlutterGems', function () {
    return view('Dev/Mobile/FlutterGems');
})->name('FlutterGems');

Route::get('/Kotlinlang', function () {
    return view('Dev/Mobile/Kotlinlang');
})->name('Kotlinlang');

Route::get('/swift', function () {
    return view('Dev/Mobile/swift');
})->name('swift');

//   MObile App End Here

// GamsDev Routes Start Here


Route::get('/Unity', function () {

    return view('Dev/Games/Unity');
})->name('Unity');

Route::get('/UnrealEngine', function () {

    return view('Dev/Games/UnrealEngine');
})->name('UnrealEngine');
Route::get('/Construct', function () {

    return view('Dev/Games/Construct');
})->name('Construct');

Route::get('/GodotEngine', function () {
    return view('Dev/Games/GodotEngine');
})->name('GodotEngine');

Route::get('/ItchIo', function () {

    return view('Dev/Games/ItchIo');
})->name('ItchIo');

Route::get('/Sketchfab', function () {

    return view('Dev/Games/Sketchfab');
})->name('Sketchfab');
Route::get('/TurboSquid', function () {

    return view('Dev/Games/TurboSquid');
})->name('TurboSquid');
Route::get('/OpenGameArt', function () {

    return view('Dev/Games/OpenGameArt');
})->name('OpenGameArt');
Route::get('/Freesound', function () {

    return view('Dev/Games/Freesound');
})->name('Freesound');
Route::get('/Soniss', function () {

    return view('Dev/Games/Soniss');
})->name('Soniss');
Route::get('/Incompetech', function () {

    return view('Dev/Games/Incompetech');
})->name('Incompetech');
Route::get('/StackExchange', function () {

    return view('Dev/Games/StackExchange');
})->name('StackExchange');

Route::get('/GameDeveloperWeb', function () {

    return view('Dev/Games/GameDeveloperWeb');
})->name('GameDeveloperWeb');

Route::get('/GameMaker', function () {

    return view('Dev/Games/GameMaker');
})->name('GameMaker');
Route::get('/UnityLearn', function () {

    return view('Dev/Games/UnityLearn');
})->name('UnityLearn');

Route::get('/brackeys', function () {

    return view('Dev/Games/brackeys');
})->name('brackeys');

Route::get('/KenneyAssets', function () {

    return view('Dev/Games/KenneyAssets');
})->name('KenneyAssets');
Route::get('/PolyPizza', function () {

    return view('Dev/Games/PolyPizza');
})->name('PolyPizza');
Route::get('/IndieDB', function () {

    return view('Dev/Games/IndieDB');
})->name('IndieDB');
Route::get('/Steamworks', function () {

    return view('Dev/Games/Steamworks');
})->name('Steamworks');
Route::get('/GameDesignLounge', function () {

    return view('Dev/Games/GameDesignLounge');
})->name('GameDesignLounge');
Route::get('/CGTrader', function () {

    return view('Dev/Games/CGTrader');
})->name('CGTrader');
Route::get('/Mixamo', function () {

    return view('Dev/Games/Mixamo');
})->name('Mixamo');
Route::get('/Cascadeur', function () {

    return view('Dev/Games/Cascadeur');
})->name('Cascadeur');
Route::get('/InworldAI', function () {

    return view('Dev/Games/InworldAI');
})->name('InworldAI');
Route::get('/LeonardoAI', function () {

    return view('Dev/Games/LeonardoAI');
})->name('LeonardoAI');
Route::get('/Phaser', function () {

    return view('Dev/Games/Phaser');
})->name('Phaser');
Route::get('/BabylonJs', function () {

    return view('Dev/Games/BabylonJs');
})->name('BabylonJs');
Route::get('/ThreeJs', function () {

    return view('Dev/Games/ThreeJs');
})->name('ThreeJs');
Route::get('/PlayFab', function () {

    return view('Dev/Games/PlayFab');
})->name('PlayFab');
Route::get('/GameAnalytics', function () {

    return view('Dev/Games/GameAnalytics');
})->name('GameAnalytics');
Route::get('/Level80', function () {

    return view('Dev/Games/Level80');
})->name('Level80');
Route::get('/PlasticSCM', function () {

    return view('Dev/Games/PlasticSCM');
})->name('PlasticSCM');
Route::get('/Perforce', function () {

    return view('Dev/Games/Perforce');
})->name('Perforce');
Route::get('/RedBlobGames', function () {

    return view('Dev/Games/RedBlobGames');
})->name('RedBlobGames');

Route::get('/GlobalGameJam', function () {

    return view('Dev/Games/GlobalGameJam');
})->name('GlobalGameJam');

//  GameDevelopment End Here


//   AI Development Start Here
Route::get('/AIDevelopment', function () {
    return view('Dev/AI/AIDevelopmen');
})->name('AIDevelopment');

Route::get('/HuggingFace', function () {
    return view('Dev/AI/HuggingFace');
})->name('HuggingFace');

Route::get('/Kaggle', function () {
    return view('Dev/AI/Kaggle');
})->name('Kaggle');
Route::get('/Cohere', function () {
    return view('Dev/AI/Cohere');
})->name('Cohere');

Route::get('/OpenAIPlatform', function () {
    return view('Dev/AI/OpenAIPlatform');
})->name('OpenAIPlatform');

Route::get('/GoogleAIStudio', function () {
    return view('Dev/AI/GoogleAIStudio');
})->name('GoogleAIStudio');

Route::get('/VertexAI', function () {
    return view('Dev/AI/VertexAI');
})->name('VertexAI');

Route::get('/AnthropicConsole', function () {
    return view('Dev/AI/AnthropicConsole');
})->name('AnthropicConsole');

Route::get('/SiliconFlow', function () {
    return view('Dev/AI/SiliconFlow');
})->name('SiliconFlow');

Route::get('/Replicate', function () {
    return view('Dev/AI/Replicate');
})->name('Replicate');

Route::get('/GoogleColab', function () {
    return view('Dev/AI/GoogleColab');
})->name('GoogleColab');

Route::get('/PaperspaceGradient', function () {
    return view('Dev/AI/PaperspaceGradient');
})->name('PaperspaceGradient');

Route::get('/Cursor', function () {
    return view('Dev/AI/Cursor');
})->name('Cursor');

Route::get('/BoltNew', function () {
    return view('Dev/AI/BoltNew');
})->name('BoltNew');

Route::get('/Pinecone', function () {
    return view('Dev/AI/Pinecone');
})->name('Pinecone');

Route::get('/LangSmith', function () {
    return view('Dev/AI/LangSmith');
})->name('LangSmith');

Route::get('/GroqCloud', function () {
    return view('Dev/AI/GroqCloud');
})->name('GroqCloud');
Route::get('/TogetherAI', function () {
    return view('Dev/AI/TogetherAI');
})->name('TogetherAI');
Route::get('/MistralAI', function () {
    return view('Dev/AI/MistralAI');
})->name('MistralAI');

Route::get('/Ollama', function () {
    return view('Dev/AI/Ollama');
})->name('Ollama');

Route::get('/LMStudio', function () {
    return view('Dev/AI/LMStudio');
})->name('LMStudio');

Route::get('/LlamaIndex', function () {
    return view('Dev/AI/LlamaIndex');
})->name('LlamaIndex');

Route::get('/ModelScope', function () {
    return view('Dev/AI/ModelScope');
})->name('ModelScope');

Route::get('/Haystack', function () {
    return view('Dev/AI/Haystack');
})->name('Haystack');

Route::get('/PyTorch', function () {
    return view('Dev/AI/PyTorch');
})->name('PyTorch');

Route::get('/TensorFlow', function () {
    return view('Dev/AI/TensorFlow');
})->name('TensorFlow');
Route::get('/Keras', function () {
    return view('Dev/AI/Keras');
})->name('Keras');

Route::get('/PaperswithCode', function () {
    return view('Dev/AI/PaperswithCode');
})->name('PaperswithCode');

Route::get('/arXivAIPapers', function () {
    return view('Dev/AI/arXivAIPapers');
})->name('arXivAIPapers');

Route::get('/TowardsDataScience', function () {
    return view('Dev/AI/TowardsDataScience');
})->name('TowardsDataScience');

Route::get('/UCIMachineLearningRepository', function () {
    return view('Dev/AI/UCIMachineLearningRepository');
})->name('UCIMachineLearningRepository');

Route::get('/UCIMachineLearningRepository', function () {
    return view('Dev/AI/UCIMachineLearningRepository');
})->name('UCIMachineLearningRepository');

Route::get('/AnalyticsVidhya', function () {
    return view('Dev/AI/AnalyticsVidhya');
})->name('AnalyticsVidhya');

Route::get('/claude', function () {
    return view('Dev/AI/claude');
})->name('claude');

Route::get('/CrewAI', function () {
    return view('Dev/AI/CrewAI');
})->name('CrewAI');

Route::get('/copilot', function () {
    return view('Dev/AI/copilot');
})->name('copilot');

//  Data Science Start Here
Route::get('/DataScience', function () {
    return view('Dev/Data/DataScience');
})->name('DataScience');

Route::get('/DrivenData', function () {
    return view('Dev/Data/DrivenData');
})->name('DrivenData');

Route::get('/Dataquest', function () {
    return view('Dev/Data/Dataquest');
})->name('Dataquest');
Route::get('/Deepnote', function () {
    return view('Dev/Data/Deepnote');
})->name('Deepnote');

Route::get('/DataCamp', function () {
    return view('Dev/Data/DataCamp');
})->name('DataCamp');

Route::get('/Coursera', function () {
    return view('Dev/Data/Coursera');
})->name('Coursera');

Route::get('/KDnuggets', function () {
    return view('Dev/Data/KDnuggets');
})->name('KDnuggets');

Route::get('/CrossValidated', function () {
    return view('Dev/Data/CrossValidated');
})->name('CrossValidated');

Route::get('/JupyterNotebook', function () {
    return view('Dev/Data/JupyterNotebook');
})->name('JupyterNotebook');

Route::get('/Zindi', function () {
    return view('Dev/Data/Zindi');
})->name('Zindi');

Route::get('/AIcrowd', function () {
    return view('Dev/Data/AIcrowd');
})->name('AIcrowd');

Route::get('/GoogleDatasetSearch', function () {
    return view('Dev/Data/GoogleDatasetSearch');
})->name('GoogleDatasetSearch');

Route::get('/OurWorldinData', function () {
    return view('Dev/Data/OurWorldinData');
})->name('OurWorldinData');

Route::get('/DistillPub', function () {
    return view('Dev/Data/DistillPub');
})->name('DistillPub');

Route::get('/edX', function () {
    return view('Dev/Data/edX');
})->name('edX');

Route::get('/DataGov', function () {
    return view('Dev/Data/DataGov');
})->name('DataGov');

Route::get('/PandasDocumentation', function () {
    return view('Dev/Data/PandasDocumentation');
})->name('PandasDocumentation');

Route::get('/NumPyDocumentation', function () {
    return view('Dev/Data/NumPyDocumentation');
})->name('NumPyDocumentation');

Route::get('/LeetCode', function () {
    return view('Dev/Data/LeetCode');
})->name('LeetCode');

Route::get('/HackerRank', function () {
    return view('Dev/Data/HackerRank');
})->name('HackerRank');

Route::get('/PowerBI', function () {
    return view('Dev/Data/PowerBI');
})->name('PowerBI');

Route::get('/OpenML', function () {
    return view('Dev/Data/OpenML');
})->name('OpenML');

Route::get('/DeepLearningAI', function () {
    return view('Dev/Data/DeepLearningAI');
})->name('DeepLearningAI');

Route::get('/Statology', function () {
    return view('Dev/Data/Statology');
})->name('Statology');

Route::get('/Zenodo', function () {
    return view('Dev/Data/Zenodo');
})->name('Zenodo');

Route::get('/Dask', function () {
    return view('Dev/Data/Dask');
})->name('Dask');

Route::get('/WorldBankOpenData', function () {
    return view('Dev/Data/WorldBankOpenData');
})->name('WorldBankOpenData');

//  Data Science End Here

Route::get('/GamesDevelopment', function () {
    return view('Dev/Games/GamesDevelopment');
})->name('GamesDevelopment');
// AnimationAnd3D Start Here
Route::get('/AnimationAnd3D', function () {
    return view('AnimationAnd3D/AnimationAnd3D');
})->name('AnimationAnd3D');
Route::get('/Spline', function () {
    return view('AnimationAnd3D/Spline');
})->name('Spline');

Route::get('/BlenderStudio', function () {
    return view('AnimationAnd3D/BlenderStudio');
})->name('BlenderStudio');

Route::get('/CGCookie', function () {
    return view('AnimationAnd3D/CGCookie');
})->name('CGCookie');

Route::get('/Blender', function () {
    return view('AnimationAnd3D/Blender');
})->name('Blender');

Route::get('/AutodeskMaya', function () {
    return view('AnimationAnd3D/AutodeskMaya');
})->name('AutodeskMaya');

Route::get('/AnimSchool', function () {
    return view('AnimationAnd3D/AnimSchool');
})->name('AnimSchool');

Route::get('/RenderHub', function () {
    return view('AnimationAnd3D/RenderHub');
})->name('RenderHub');

Route::get('/Free3D', function () {
    return view('AnimationAnd3D/Free3D');
})->name('Free3D');

Route::get('/BlendSwap', function () {
    return view('AnimationAnd3D/BlendSwap');
})->name('BlendSwap');

Route::get('/TexturesCom', function () {
    return view('AnimationAnd3D/TexturesCom');
})->name('TexturesCom');

Route::get('/PolyHaven', function () {
    return view('AnimationAnd3D/PolyHaven');
})->name('PolyHaven');

Route::get('/ambientCG', function () {
    return view('AnimationAnd3D/ambientCG');
})->name('ambientCG');

Route::get('/Autodesk3dsMax', function () {
    return view('AnimationAnd3D/Autodesk3dsMax');
})->name('Autodesk3dsMax');

Route::get('/Houdini', function () {
    return view('AnimationAnd3D/Houdini');
})->name('Houdini');

Route::get('/ZBrush', function () {
    return view('AnimationAnd3D/ZBrush');
})->name('ZBrush');

Route::get('/TexturesMe3D', function () {
    return view('AnimationAnd3D/TexturesMe3D');
})->name('TexturesMe3D');

Route::get('/Reallusion', function () {
    return view('AnimationAnd3D/Reallusion');
})->name('Reallusion');

Route::get('/QuixelMegascans', function () {
    return view('AnimationAnd3D/QuixelMegascans');
})->name('QuixelMegascans');

Route::get('/Daz3D', function () {
    return view('AnimationAnd3D/Daz3D');
})->name('Daz3D');

Route::get('/MetaHumanCreator', function () {
    return view('AnimationAnd3D/MetaHumanCreator');
})->name('MetaHumanCreator');

Route::get('/ActionVFX', function () {
    return view('AnimationAnd3D/ActionVFX');
})->name('ActionVFX');

Route::get('/ProductionCrate', function () {
    return view('AnimationAnd3D/ProductionCrate');
})->name('ProductionCrate');

Route::get('/VideoCopilot', function () {
    return view('AnimationAnd3D/VideoCopilot');
})->name('VideoCopilot');

Route::get('/ChaosVRay', function () {
    return view('AnimationAnd3D/ChaosVRay');
})->name('ChaosVRay');

Route::get('/CoronaRenderer', function () {
    return view('AnimationAnd3D/CoronaRenderer');
})->name('CoronaRenderer');

Route::get('/OctaneRender', function () {
    return view('AnimationAnd3D/OctaneRender');
})->name('OctaneRender');

Route::get('/Redshift', function () {
    return view('AnimationAnd3D/Redshift');
})->name('Redshift');

Route::get('/SchoolofMotion', function () {
    return view('AnimationAnd3D/SchoolofMotion');
})->name('SchoolofMotion');

Route::get('/MotionDesignSchool', function () {
    return view('AnimationAnd3D/MotionDesignSchool');
})->name('MotionDesignSchool');

Route::get('/Kaiber', function () {
    return view('AnimationAnd3D/Kaiber');
})->name('Kaiber');

Route::get('/MeshyAI', function () {
    return view('AnimationAnd3D/MeshyAI');
})->name('MeshyAI');
// AnimationAnd3D End Here

//   UI/UX Start Here
Route::get('/UIDesign', function () {
    return view('Dev/UI/UI&UX');
})->name('UIDesign');

Route::get('/Storyset', function () {
    return view('Dev/UI/Storyset');
})->name('Storyset');

Route::get('/Iconify', function () {
    return view('Dev/UI/Iconify');
})->name('Iconify');
Route::get('/UXPin', function () {
    return view('Dev/UI/UXPin');
})->name('UXPin');

Route::get('/FigmaCommunity', function () {
    return view('Dev/UI/FigmaCommunity');
})->name('FigmaCommunity');

Route::get('/LandBook', function () {
    return view('Dev/UI/LandBook');
})->name('LandBook');

Route::get('/PageFlows', function () {
    return view('Dev/UI/PageFlows');
})->name('PageFlows');

Route::get('/SaaSframe', function () {
    return view('Dev/UI/SaaSframe');
})->name('SaaSframe');

Route::get('/RealtimeColors', function () {
    return view('Dev/UI/RealtimeColors');
})->name('RealtimeColors');

Route::get('/Typewolf', function () {
    return view('Dev/UI/Typewolf');
})->name('Typewolf');

Route::get('/FontShare', function () {
    return view('Dev/UI/FontShare');
})->name('FontShare');

Route::get('/Whimsical', function () {
    return view('Dev/UI/Whimsical');
})->name('Whimsical');

Route::get('/Balsamiq', function () {
    return view('Dev/UI/Balsamiq');
})->name('Balsamiq');

Route::get('/LawsofUX', function () {
    return view('Dev/UI/LawsofUX');
})->name('LawsofUX');

Route::get('/NielsenNormanGroup', function () {
    return view('Dev/UI/NielsenNormanGroup');
})->name('NielsenNormanGroup');

Route::get('/UXArchive', function () {
    return view('Dev/UI/UXArchive');
})->name('UXArchive');

Route::get('/GrowthDesign', function () {
    return view('Dev/UI/GrowthDesign');
})->name('GrowthDesign');

Route::get('/Sketch', function () {
    return view('Dev/UI/Sketch');
})->name('Sketch');

Route::get('/AxureRP', function () {
    return view('Dev/UI/AxureRP');
})->name('AxureRP');

Route::get('/AdobeXD', function () {
    return view('Dev/UI/AdobeXD');
})->name('AdobeXD');

Route::get('/UI8', function () {
    return view('Dev/UI/UI8');
})->name('UI8');

//   UI/UX End Here
// Editing Start Here
Route::get('/Editing', function () {
    return view('Editing/Editing');
})->name('Editing');
Route::get('/Photopea', function () {
    return view('Editing/Photopea');
})->name('Photopea');

Route::get('/Clipchamp', function () {
    return view('Editing/Clipchamp');
})->name('Clipchamp');

Route::get('/Kapwing', function () {
    return view('Editing/Kapwing');
})->name('Kapwing');

Route::get('/AdobePremierePro', function () {
    return view('Editing/AdobePremierePro');
})->name('AdobePremierePro');

Route::get('/DaVinciResolve', function () {
    return view('Editing/DaVinciResolve');
})->name('DaVinciResolve');

Route::get('/CapCut', function () {
    return view('Editing/CapCut');
})->name('CapCut');

Route::get('/VeedIo', function () {
    return view('Editing/VeedIo');
})->name('VeedIo');

Route::get('/InVideo', function () {
    return view('Editing/InVideo');
})->name('InVideo');

Route::get('/Animoto', function () {
    return view('Editing/Animoto');
})->name('Animoto');

Route::get('/Mixkit', function () {
    return view('Editing/Mixkit');
})->name('Mixkit');

Route::get('/EpidemicSound', function () {
    return view('Editing/EpidemicSound');
})->name('EpidemicSound');

Route::get('/Pixabay', function () {
    return view('Editing/Pixabay');
})->name('Pixabay');

Route::get('/PexelsVideo', function () {
    return view('Editing/PexelsVideo');
})->name('PexelsVideo');

Route::get('/Videezy', function () {
    return view('Editing/Videezy');
})->name('Videezy');

Route::get('/MotionArray', function () {
    return view('Editing/MotionArray');
})->name('MotionArray');

Route::get('/FrameIo', function () {
    return view('Editing/FrameIo');
})->name('FrameIo');

Route::get('/ShareAE', function () {
    return view('Editing/ShareAE');
})->name('ShareAE');

Route::get('/VFXDownload', function () {
    return view('Editing/VFXDownload');
})->name('VFXDownload');

Route::get('/FlexClip', function () {
    return view('Editing/FlexClip');
})->name('FlexClip');

Route::get('/Runway', function () {
    return view('Editing/Runway');
})->name('Runway');

Route::get('/WeVideo', function () {
    return view('Editing/WeVideo');
})->name('WeVideo');

Route::get('/WaveVideo', function () {
    return view('Editing/WaveVideo');
})->name('WaveVideo');

Route::get('/Renderforest', function () {
    return view('Editing/Renderforest');
})->name('Renderforest');

Route::get('/OpusClip', function () {
    return view('Editing/OpusClip');
})->name('OpusClip');

Route::get('/Pictory', function () {
    return view('Editing/Pictory');
})->name('Pictory');

Route::get('/Descript', function () {
    return view('Editing/Descript');
})->name('Descript');

Route::get('/Lumen5', function () {
    return view('Editing/Lumen5');
})->name('Lumen5');

Route::get('/Filmora', function () {
    return view('Editing/Filmora');
})->name('Filmora');

Route::get('/Flixier', function () {
    return view('Editing/Flixier');
})->name('Flixier');

Route::get('/Biteable', function () {
    return view('Editing/Biteable');
})->name('Biteable');

Route::get('/Animaker', function () {
    return view('Editing/Animaker');
})->name('Animaker');

Route::get('/Shotcut', function () {
    return view('Editing/Shotcut');
})->name('Shotcut');

// Editing End Here
// cyberSecurity Start Here
Route::get('/cyberSecurity', function () {
    return view('Dev/cyberSecurity/cyberSecurity');
})->name('cyberSecurity');

Route::get('/TryHackMe', function () {
    return view('Dev/cyberSecurity/TryHackMe');
})->name('TryHackMe');
Route::get('/MITREATTCK', function () {
    return view('Dev/cyberSecurity/MITREATTCK');
})->name('MITREATTCK');

Route::get('/HackTheBox', function () {
    return view('Dev/cyberSecurity/HackTheBox');
})->name('HackTheBox');

Route::get('/PortSwiggerWebSecurityAcademy', function () {
    return view('Dev/cyberSecurity/PortSwiggerWebSecurityAcademy');
})->name('PortSwiggerWebSecurityAcademy');

Route::get('/OverTheWire', function () {
    return view('Dev/cyberSecurity/OverTheWire');
})->name('OverTheWire');

Route::get('/picoCTF', function () {
    return view('Dev/cyberSecurity/picoCTF');
})->name('picoCTF');

Route::get('/CTFtime', function () {
    return view('Dev/cyberSecurity/CTFtime');
})->name('CTFtime');

Route::get('/HackerOne', function () {
    return view('Dev/cyberSecurity/HackerOne');
})->name('HackerOne');

Route::get('/Bugcrowd', function () {
    return view('Dev/cyberSecurity/Bugcrowd');
})->name('Bugcrowd');

Route::get('/TheHackerNews', function () {
    return view('Dev/cyberSecurity/TheHackerNews');
})->name('TheHackerNews');

Route::get('/CVEMitre', function () {
    return view('Dev/cyberSecurity/CVEMitre');
})->name('CVEMitre');

Route::get('/BleepingComputer', function () {
    return view('Dev/cyberSecurity/BleepingComputer');
})->name('BleepingComputer');

Route::get('/CyberDefenders', function () {
    return view('Dev/cyberSecurity/CyberDefenders');
})->name('CyberDefenders');

Route::get('/LetsDefend', function () {
    return view('Dev/cyberSecurity/LetsDefend');
})->name('LetsDefend');

Route::get('/VulnHub', function () {
    return view('Dev/cyberSecurity/VulnHub');
})->name('VulnHub');

Route::get('/OffSecLearningLibrary', function () {
    return view('Dev/cyberSecurity/OffSecLearningLibrary');
})->name('OffSecLearningLibrary');

Route::get('/Cybrary', function () {
    return view('Dev/cyberSecurity/Cybrary');
})->name('Cybrary');

Route::get('/AntisyphonTraining', function () {
    return view('Dev/cyberSecurity/AntisyphonTraining');
})->name('AntisyphonTraining');

Route::get('/DarkReading', function () {
    return view('Dev/cyberSecurity/DarkReading');
})->name('DarkReading');

Route::get('/DanielMiessler', function () {
    return view('Dev/cyberSecurity/DanielMiessler');
})->name('DanielMiessler');

Route::get('/NISTNVD', function () {
    return view('Dev/cyberSecurity/NISTNVD');
})->name('NISTNVD');

Route::get('/Intigriti', function () {
    return view('Dev/cyberSecurity/Intigriti');
})->name('Intigriti');

Route::get('/OpenBugBounty', function () {
    return view('Dev/cyberSecurity/OpenBugBounty');
})->name('OpenBugBounty');

Route::get('/KrebsonSecurity', function () {
    return view('Dev/cyberSecurity/KrebsonSecurity');
})->name('KrebsonSecurity');

Route::get('/ExploitDatabase', function () {
    return view('Dev/cyberSecurity/ExploitDatabase');
})->name('ExploitDatabase');

Route::get('/RootMe', function () {
    return view('Dev/cyberSecurity/RootMe');
})->name('RootMe');

Route::get('/OSINTFramework', function () {
    return view('Dev/cyberSecurity/OSINTFramework');
})->name('OSINTFramework');

Route::get('/Shodan', function () {
    return view('Dev/cyberSecurity/Shodan');
})->name('Shodan');

Route::get('/Censys', function () {
    return view('Dev/cyberSecurity/Censys');
})->name('Censys');

Route::get('/AnyRun', function () {
    return view('Dev/cyberSecurity/AnyRun');
})->name('AnyRun');

Route::get('/HybridAnalysis', function () {
    return view('Dev/cyberSecurity/HybridAnalysis');
})->name('HybridAnalysis');

Route::get('/VirusTotal', function () {
    return view('Dev/cyberSecurity/VirusTotal');
})->name('VirusTotal');

// cyberSecurity End Here

Route::get('/office', function () {
    return view('office.office');
})->name('office');



Route::get('/powerpoint', function () {
    return view('office.powerpoint.powerpoint');
})->name('powerpoint');

Route::get('/word', function () {
    return view('office.word.word');
})->name('word');
Route::get('/WordDon', function () {
    return view('office.word.WordDon');
})->name('WordDon');
Route::get('/Grammarly', function () {
    return view('office.word.Grammarly');
})->name('Grammarly');
Route::get('/QuillBot', function () {
    return view('office.word.QuillBot');
})->name('QuillBot');
Route::get('/LanguageTool', function () {
    return view('office.word.LanguageTool');
})->name('LanguageTool');
Route::get('/HemingwayEditor', function () {
    return view('office.word.HemingwayEditor');
})->name('HemingwayEditor');
Route::get('/Scribbr', function () {
    return view('office.word.Scribbr');
})->name('Scribbr');
Route::get('/Zotero', function () {
    return view('office.word.Zotero');
})->name('Zotero');
Route::get('/Mendeley', function () {
    return view('office.word.Mendeley');
})->name('Mendeley');
Route::get('/CanvaDocs', function () {
    return view('office.word.CanvaDocs');
})->name('CanvaDocs');
Route::get('/TinyWowWordTools', function () {
    return view('office.word.TinyWowWordTools');
})->name('TinyWowWordTools');
Route::get('/iLovePDF', function () {
    return view('office.word.iLovePDF');
})->name('iLovePDF');
Route::get('/ProWritingAid', function () {
    return view('office.word.ProWritingAid');
})->name('ProWritingAid');
Route::get('/DeepLWrite', function () {
    return view('office.word.DeepLWrite');
})->name('DeepLWrite');
Route::get('/Writesonic', function () {
    return view('office.word.Writesonic');
})->name('Writesonic');
Route::get('/RefWorks', function () {
    return view('office.word.RefWorks');
})->name('RefWorks');
Route::get('/CopyAi', function () {
    return view('office.word.CopyAi');
})->name('CopyAi');
Route::get('/jasper', function () {
    return view('office.word.jasper');
})->name('jasper');
Route::get('/Rytr', function () {
    return view('office.word.Rytr');
})->name('Rytr');
Route::get('/Anyword', function () {
    return view('office.word.Anyword');
})->name('Anyword');
Route::get('/EndNote', function () {
    return view('office.word.EndNote');
})->name('EndNote');
Route::get('/Paperpile', function () {
    return view('office.word.Paperpile');
})->name('Paperpile');
Route::get('/Turnitin', function () {
    return view('office.word.Turnitin');
})->name('Turnitin');
Route::get('/Copyscape', function () {
    return view('office.word.Copyscape');
})->name('Copyscape');
Route::get('/Template', function () {
    return view('office.word.Template');
})->name('Template');
Route::get('/Vertex42', function () {
    return view('office.word.Vertex42');
})->name('Vertex42');
Route::get('/PoweredTemplate', function () {
    return view('office.word.PoweredTemplate');
})->name('PoweredTemplate');
Route::get('/PDF24', function () {
    return view('office.word.PDF24');
})->name('PDF24');
Route::get('/GoogleScholar', function () {
    return view('office.word.GoogleScholar');
})->name('GoogleScholar');
Route::get('/ResearchGate', function () {
    return view('office.word.ResearchGate');
})->name('ResearchGate');
Route::get('/SemanticScholar', function () {
    return view('office.word.SemanticScholar');
})->name('SemanticScholar');
Route::get('/PubMed', function () {
    return view('office.word.PubMed');
})->name('PubMed');
Route::get('/JSTOR', function () {
    return view('office.word.JSTOR');
})->name('JSTOR');
Route::get('/TextFixer', function () {
    return view('office.word.TextFixer');
})->name('TextFixer');
Route::get('/WordCounter', function () {
    return view('office.word.WordCounter');
})->name('WordCounter');
Route::get('/characterCountOnline', function () {
    return view('office.word.characterCountOnline');
})->name('characterCountOnline');
Route::get('/Diffchecker', function () {
    return view('office.word.Diffchecker');
})->name('Diffchecker');
Route::get('/WinMerge', function () {
    return view('office.word.WinMerge');
})->name('WinMerge');
// powerpoint Start Here

Route::get('/Slidesgo', function () {
    return view('office.powerpoint.Slidesgo');
})->name('Slidesgo');
Route::get('/PowerPointDon', function () {
    return view('office.powerpoint.PowerPointDon');
})->name('PowerPointDon');

Route::get('/SlidesCarnival', function () {
    return view('office.powerpoint.SlidesCarnival');
})->name('SlidesCarnival');

Route::get('/PresentationGO', function () {
    return view('office.powerpoint.PresentationGO');
})->name('PresentationGO');

Route::get('/TheNounProject', function () {
    return view('office.powerpoint.TheNounProject');
})->name('TheNounProject');

Route::get('/Visme', function () {
    return view('office.powerpoint.Visme');
})->name('Visme');

Route::get('/infogram', function () {
    return view('office.powerpoint.infogram');
})->name('infogram');

Route::get('/Gamma', function () {
    return view('office.powerpoint.Gamma');
})->name('Gamma');

Route::get('/BeautifulAi', function () {
    return view('office.powerpoint.BeautifulAi');
})->name('BeautifulAi');

Route::get('/SlideModel', function () {
    return view('office.powerpoint.SlideModel');
})->name('SlideModel');

Route::get('/FPPT', function () {
    return view('office.powerpoint.FPPT');
})->name('FPPT');

Route::get('/Showeet', function () {
    return view('office.powerpoint.Showeet');
})->name('Showeet');

Route::get('/SlideHunter', function () {
    return view('office.powerpoint.SlideHunter');
})->name('SlideHunter');

Route::get('/Burst', function () {
    return view('office.powerpoint.Burst');
})->name('Burst');

Route::get('/Venngage', function () {
    return view('office.powerpoint.Venngage');
})->name('Venngage');

Route::get('/Piktochart', function () {
    return view('office.powerpoint.Piktochart');
})->name('Piktochart');

Route::get('/SlideGeeks', function () {
    return view('office.powerpoint.SlideGeeks');
})->name('SlideGeeks');

Route::get('/TemplateMonster', function () {
    return view('office.powerpoint.TemplateMonster');
})->name('TemplateMonster');

Route::get('/MicrosoftOfficeTemplates', function () {
    return view('office.powerpoint.MicrosoftOfficeTemplates');
})->name('MicrosoftOfficeTemplates');

Route::get('/StockSnap', function () {
    return view('office.powerpoint.StockSnap');
})->name('StockSnap');

Route::get('/WPSOfficeTemplates', function () {
    return view('office.powerpoint.WPSOfficeTemplates');
})->name('WPSOfficeTemplates');

Route::get('/SlidesMania', function () {
    return view('office.powerpoint.SlidesMania');
})->name('SlidesMania');

Route::get('/docsGoogle', function () {
    return view('office.powerpoint.docsGoogle');
})->name('docsGoogle');

// powerpoint End Here

// Excel Start Here
// Excel End Here


Route::get('/excel', function () {
    return view('office.excel.excel');
})->name('excel');
Route::get('/ExcelDon', function () {
    return view('office.excel.ExcelDon');
})->name('ExcelDon');


Route::get('/MicrosoftExcelTraining', function () {
    return view('office.excel.MicrosoftExcelTraining');
})->name('MicrosoftExcelTraining');

Route::get('/ExcelEasy', function () {
    return view('office.excel.ExcelEasy');
})->name('ExcelEasy');

Route::get('/ExcelJet', function () {
    return view('office.excel.ExcelJet');
})->name('ExcelJet');

Route::get('/Spreadsheeto', function () {
    return view('office.excel.Spreadsheeto');
})->name('Spreadsheeto');

Route::get('/MyOnlineTrainingHub', function () {
    return view('office.excel.MyOnlineTrainingHub');
})->name('MyOnlineTrainingHub');

Route::get('/Spreadsheet123', function () {
    return view('office.excel.Spreadsheet123');
})->name('Spreadsheet123');

Route::get('/TemplateNet', function () {
    return view('office.excel.TemplateNet');
})->name('TemplateNet');

Route::get('/CloudConvert', function () {
    return view('office.excel.CloudConvert');
})->name('CloudConvert');

Route::get('/Datawrapper', function () {
    return view('office.excel.Datawrapper');
})->name('Datawrapper');

Route::get('/Flourish', function () {
    return view('office.excel.Flourish');
})->name('Flourish');

Route::get('/Convertio', function () {
    return view('office.excel.Convertio');
})->name('Convertio');

Route::get('/OpenRefine', function () {
    return view('office.excel.OpenRefine');
})->name('OpenRefine');

Route::get('/Airtable', function () {
    return view('office.excel.Airtable');
})->name('Airtable');

Route::get('/ZohoSheet', function () {
    return view('office.excel.ZohoSheet');
})->name('ZohoSheet');

Route::get('/ONLYOFFICE', function () {
    return view('office.excel.ONLYOFFICE');
})->name('ONLYOFFICE');

Route::get('/ExcelFormulaBot', function () {
    return view('office.excel.ExcelFormulaBot');
})->name('ExcelFormulaBot');

Route::get('/formulasHq', function () {
    return view('office.excel.formulasHq');
})->name('formulasHq');

Route::get('/AblebitsExcelBlog', function () {
    return view('office.excel.AblebitsExcelBlog');
})->name('AblebitsExcelBlog');

Route::get('/GPTExcel', function () {
    return view('office.excel.GPTExcel');
})->name('GPTExcel');

Route::get('/AjelixAI', function () {
    return view('office.excel.AjelixAI');
})->name('AjelixAI');

Route::get('/sheetAi', function () {
    return view('office.excel.sheetAi');
})->name('sheetAi');

Route::get('/Indzara', function () {
    return view('office.excel.Indzara');
})->name('Indzara');

Route::get('/ExcelDashboardSchool', function () {
    return view('office.excel.ExcelDashboardSchool');
})->name('ExcelDashboardSchool');

Route::get('/Someka', function () {
    return view('office.excel.Someka');
})->name('Someka');

Route::get('/Eloquens', function () {
    return view('office.excel.Eloquens');
})->name('Eloquens');

Route::get('/QlikSense', function () {
    return view('office.excel.QlikSense');
})->name('QlikSense');

Route::get('/Plotly', function () {
    return view('office.excel.Plotly');
})->name('Plotly');

Route::get('/ApacheSuperset', function () {
    return view('office.excel.ApacheSuperset');
})->name('ApacheSuperset');

Route::get('/Baserow', function () {
    return view('office.excel.Baserow');
})->name('Baserow');


// Excel End Here

//   DEsign Start Here
Route::get('/Design', function () {
    return view('Design.Design');
})->name('Design');

//  AIROOM Start Here
Route::get('/AIROOM', function () {
    return view('AIROOM.AIROOM');
})->name('AIROOM');
// ChatAI Start Here
Route::get('/ChatAI', function () {
    return view('AIROOM.ChatAI.ChatAI');
})->name('ChatAI');
Route::get('/MetaAI', function () {
    return view('AIROOM.ChatAI.MetaAI');
})->name('MetaAI');
// ChatAI End Here

// Automation Start Here

Route::get('/Automation', function () {
    return view('AIROOM.Automation.Automation');
})->name('Automation');
Route::get('/Zapier', function () {
    return view('AIROOM.Automation.Zapier');
})->name('Zapier');
Route::get('/Make', function () {
    return view('AIROOM.Automation.Make');
})->name('Make');
Route::get('/nOps', function () {
    return view('AIROOM.Automation.nOps');
})->name('nOps');
Route::get('/n8n', function () {
    return view('AIROOM.Automation.n8n');
})->name('n8n');
Route::get('/Pipedream', function () {
    return view('AIROOM.Automation.Pipedream');
})->name('Pipedream');
Route::get('/IFTTT', function () {
    return view('AIROOM.Automation.IFTTT');
})->name('IFTTT');
Route::get('/RelayApp', function () {
    return view('AIROOM.Automation.RelayApp');
})->name('RelayApp');
Route::get('/Albato', function () {
    return view('AIROOM.Automation.Albato');
})->name('Albato');
Route::get('/Integrately', function () {
    return view('AIROOM.Automation.Integrately');
})->name('Integrately');
Route::get('/AgentGPT', function () {
    return view('AIROOM.Automation.AgentGPT');
})->name('AgentGPT');
Route::get('/AutoGPT', function () {
    return view('AIROOM.Automation.AutoGPT');
})->name('AutoGPT');
Route::get('/Flowise', function () {
    return view('AIROOM.Automation.Flowise');
})->name('Flowise');
Route::get('/Dify', function () {
    return view('AIROOM.Automation.Dify');
})->name('Dify');
Route::get('/ActiveCampaign', function () {
    return view('AIROOM.Automation.ActiveCampaign');
})->name('ActiveCampaign');
Route::get('/Mailchimp', function () {
    return view('AIROOM.Automation.Mailchimp');
})->name('Mailchimp');
Route::get('/Brevo', function () {
    return view('AIROOM.Automation.Brevo');
})->name('Brevo');
Route::get('/HubSpot', function () {
    return view('AIROOM.Automation.HubSpot');
})->name('HubSpot');
Route::get('/Buffer', function () {
    return view('AIROOM.Automation.Buffer');
})->name('Buffer');
Route::get('/Publer', function () {
    return view('AIROOM.Automation.Publer');
})->name('Publer');
Route::get('/Metricool', function () {
    return view('AIROOM.Automation.Metricool');
})->name('Metricool');
Route::get('/UiPath', function () {
    return view('AIROOM.Automation.UiPath');
})->name('UiPath');
Route::get('/AutomationAnywhere', function () {
    return view('AIROOM.Automation.AutomationAnywhere');
})->name('AutomationAnywhere');
Route::get('/Robocorp', function () {
    return view('AIROOM.Automation.Robocorp');
})->name('Robocorp');
Route::get('/LindyAI', function () {
    return view('AIROOM.Automation.LindyAI');
})->name('LindyAI');
Route::get('/Gumloop', function () {
    return view('AIROOM.Automation.Gumloop');
})->name('Gumloop');
Route::get('/Bardeen', function () {
    return view('AIROOM.Automation.Bardeen');
})->name('Bardeen');
Route::get('/Airtop', function () {
    return view('AIROOM.Automation.Airtop');
})->name('Airtop');
Route::get('/TaskadeAIAgents', function () {
    return view('AIROOM.Automation.TaskadeAIAgents');
})->name('TaskadeAIAgents');
Route::get('/Workato', function () {
    return view('AIROOM.Automation.Workato');
})->name('Workato');
Route::get('/TrayAi', function () {
    return view('AIROOM.Automation.TrayAi');
})->name('TrayAi');
Route::get('/RelevanceAI', function () {
    return view('AIROOM.Automation.RelevanceAI');
})->name('RelevanceAI');
Route::get('/SuperAGI', function () {
    return view('AIROOM.Automation.SuperAGI');
})->name('SuperAGI');
Route::get('/LangChain', function () {
    return view('AIROOM.Automation.LangChain');
})->name('LangChain');
Route::get('/Temporal', function () {
    return view('AIROOM.Automation.Temporal');
})->name('Temporal');
Route::get('/Kestra', function () {
    return view('AIROOM.Automation.Kestra');
})->name('Kestra');
Route::get('/Glide', function () {
    return view('AIROOM.Automation.Glide');
})->name('Glide');

// Automation End Here


Route::get('/ChatGPT', function () {
    return view('AIROOM.ChatAI.ChatGPT');
})->name('ChatGPT');

Route::get('/Gemini', function () {
    return view('AIROOM.ChatAI.Gemini');
})->name('Gemini');

Route::get('/Claude', function () {
    return view('AIROOM.ChatAI.Claude');
})->name('Claude');

Route::get('/Copilot', function () {
    return view('AIROOM.ChatAI.Copilot');
})->name('Copilot');

Route::get('/deepseek', function () {
    return view('AIROOM.ChatAI.deepseek');
})->name('deepseek');

Route::get('/munas', function () {
    return view('AIROOM.ChatAI.munas');
})->name('munas');

Route::get('/Perplexity', function () {
    return view('AIROOM.ChatAI.Perplexity');
})->name('Perplexity');

Route::get('/YouCom', function () {
    return view('AIROOM.ChatAI.YouCom');
})->name('YouCom');
Route::get('/Phind', function () {
    return view('AIROOM.ChatAI.Phind');
})->name('Phind');
Route::get('/Poe', function () {
    return view('AIROOM.ChatAI.Poe');
})->name('Poe');
Route::get('/CharacterAI', function () {
    return view('AIROOM.ChatAI.CharacterAI');
})->name('CharacterAI');
Route::get('/Replika', function () {
    return view('AIROOM.ChatAI.Replika');
})->name('Replika');
Route::get('/Grok', function () {
    return view('AIROOM.ChatAI.Grok');
})->name('Grok');
Route::get('/PiAI', function () {
    return view('AIROOM.ChatAI.PiAI');
})->name('PiAI');
Route::get('/Mistral', function () {
    return view('AIROOM.ChatAI.Mistral');
})->name('Mistral');
Route::get('/Qwen', function () {
    return view('AIROOM.ChatAI.Qwen');
})->name('Qwen');
Route::get('/Kimi', function () {
    return view('AIROOM.ChatAI.Kimi');
})->name('Kimi');
Route::get('/HIX', function () {
    return view('AIROOM.ChatAI.HIX');
})->name('HIX');
Route::get('/Monica', function () {
    return view('AIROOM.ChatAI.Monica');
})->name('Monica');
Route::get('/Blackbox', function () {
    return view('AIROOM.ChatAI.Blackbox');
})->name('Blackbox');
Route::get('/AskAI', function () {
    return view('AIROOM.ChatAI.AskAI');
})->name('AskAI');
Route::get('/Nova', function () {
    return view('AIROOM.ChatAI.Nova');
})->name('Nova');
Route::get('/GenieAI', function () {
    return view('AIROOM.ChatAI.GenieAI');
})->name('GenieAI');
Route::get('/ChatOn', function () {
    return view('AIROOM.ChatAI.ChatOn');
})->name('ChatOn');
Route::get('/Elicit', function () {
    return view('AIROOM.ChatAI.Elicit');
})->name('Elicit');
Route::get('/Consensus', function () {
    return view('AIROOM.ChatAI.Consensus');
})->name('Consensus');
Route::get('/SciSpace', function () {
    return view('AIROOM.ChatAI.SciSpace');
})->name('SciSpace');
Route::get('/ResearchRabbit', function () {
    return view('AIROOM.ChatAI.ResearchRabbit');
})->name('ResearchRabbit');
Route::get('/NotionAI', function () {
    return view('AIROOM.ChatAI.NotionAI');
})->name('NotionAI');
Route::get('/ClickUp', function () {
    return view('AIROOM.ChatAI.ClickUp');
})->name('ClickUp');

// PhotosAndvideos Start Here

Route::get('/PhotosAndvideos', function () {
    return view('AIROOM.PhotosAndvideos.PhotosAndvideos');
})->name('PhotosAndvideos');

Route::get('/Midjourney', function () {
    return view('AIROOM.PhotosAndvideos.Midjourney');
})->name('Midjourney');
Route::get('/AdobeFirefly', function () {
    return view('AIROOM.PhotosAndvideos.AdobeFirefly');
})->name('AdobeFirefly');
Route::get('/StableDiffusion', function () {
    return view('AIROOM.PhotosAndvideos.StableDiffusion');
})->name('StableDiffusion');
Route::get('/Ideogram', function () {
    return view('AIROOM.PhotosAndvideos.Ideogram');
})->name('Ideogram');
Route::get('/Recraft', function () {
    return view('AIROOM.PhotosAndvideos.Recraft');
})->name('Recraft');
Route::get('/Playground', function () {
    return view('AIROOM.PhotosAndvideos.Playground');
})->name('Playground');
Route::get('/NightCafe', function () {
    return view('AIROOM.PhotosAndvideos.NightCafe');
})->name('NightCafe');
Route::get('/MageSpace', function () {
    return view('AIROOM.PhotosAndvideos.MageSpace');
})->name('MageSpace');
Route::get('/KlingAI', function () {
    return view('AIROOM.PhotosAndvideos.KlingAI');
})->name('KlingAI');
Route::get('/HailuoAI', function () {
    return view('AIROOM.PhotosAndvideos.HailuoAI');
})->name('HailuoAI');
Route::get('/Pika', function () {
    return view('AIROOM.PhotosAndvideos.Pika');
})->name('Pika');
Route::get('/LumaDreamMachine', function () {
    return view('AIROOM.PhotosAndvideos.LumaDreamMachine');
})->name('LumaDreamMachine');
Route::get('/PixVerseAI', function () {
    return view('AIROOM.PhotosAndvideos.PixVerseAI');
})->name('PixVerseAI');
Route::get('/HeyGen', function () {
    return view('AIROOM.PhotosAndvideos.HeyGen');
})->name('HeyGen');
Route::get('/Synthesia', function () {
    return view('AIROOM.PhotosAndvideos.Synthesia');
})->name('Synthesia');
Route::get('/nanobanana', function () {
    return view('AIROOM.PhotosAndvideos.nanobanana');
})->name('nanobanana');
Route::get('/TensorArt', function () {
    return view('AIROOM.PhotosAndvideos.TensorArt');
})->name('TensorArt');
Route::get('/Civitai', function () {
    return view('AIROOM.PhotosAndvideos.Civitai');
})->name('Civitai');
Route::get('/Craiyon', function () {
    return view('AIROOM.PhotosAndvideos.Craiyon');
})->name('Craiyon');
Route::get('/StarryAI', function () {
    return view('AIROOM.PhotosAndvideos.StarryAI');
})->name('StarryAI');
Route::get('/Artbreeder', function () {
    return view('AIROOM.PhotosAndvideos.Artbreeder');
})->name('Artbreeder');
Route::get('/FotorAI', function () {
    return view('AIROOM.PhotosAndvideos.FotorAI');
})->name('FotorAI');
Route::get('/DeepAI', function () {
    return view('AIROOM.PhotosAndvideos.DeepAI');
})->name('DeepAI');
Route::get('/ImagineArt', function () {
    return view('AIROOM.PhotosAndvideos.ImagineArt');
})->name('ImagineArt');
Route::get('/GetimgAi', function () {
    return view('AIROOM.PhotosAndvideos.GetimgAi');
})->name('GetimgAi');
Route::get('/SeaArtAI', function () {
    return view('AIROOM.PhotosAndvideos.SeaArtAI');
})->name('SeaArtAI');
Route::get('/OpenArt', function () {
    return view('AIROOM.PhotosAndvideos.OpenArt');
})->name('OpenArt');
Route::get('/DzineAI', function () {
    return view('AIROOM.PhotosAndvideos.DzineAI');
})->name('DzineAI');
Route::get('/HaiperAI', function () {
    return view('AIROOM.PhotosAndvideos.HaiperAI');
})->name('HaiperAI');
Route::get('/ViduAI', function () {
    return view('AIROOM.PhotosAndvideos.ViduAI');
})->name('ViduAI');
Route::get('/HiggsfieldAI', function () {
    return view('AIROOM.PhotosAndvideos.HiggsfieldAI');
})->name('HiggsfieldAI');

// PhotosAndvideos End Here

//  AIROOM End Here


Route::get('/Behance', function () {
    return view('Design.Behance');
})->name('Behance');

Route::get('/Dribbble', function () {
    return view('Design.Dribbble');
})->name('Dribbble');

Route::get('/Pinterest', function () {
    return view('Design.Pinterest');
})->name('Pinterest');

Route::get('/Awwwards', function () {
    return view('Design.Awwwards');
})->name('Awwwards');

Route::get('/ArtStation', function () {
    return view('Design.ArtStation');
})->name('ArtStation');

Route::get('/Envato', function () {
    return view('Design.Envato');
})->name('Envato');

Route::get('/Canva', function () {
    return view('Design.Canva');
})->name('Canva');

Route::get('/Designspiration', function () {
    return view('Design.Designspiration');
})->name('Designspiration');

Route::get('/Lottiefiles', function () {
    return view('Design.Lottiefiles');
})->name('Lottiefiles');

Route::get('/Coolors', function () {
    return view('Design.Coolors');
})->name('Coolors');

Route::get('/Unsplash', function () {
    return view('Design.Unsplash');
})->name('Unsplash');

Route::get('/Icons8', function () {
    return view('Design.Icons8');
})->name('Icons8');

Route::get('/Magnific', function () {
    return view('Design.Magnific');
})->name('Magnific');

Route::get('/Mobbin', function () {
    return view('Design.Mobbin');
})->name('Mobbin');

Route::get('/Flaticon', function () {
    return view('Design.Flaticon');
})->name('Flaticon');

Route::get('/unDraw', function () {
    return view('Design.unDraw');
})->name('unDraw');

Route::get('/AdobeColor', function () {
    return view('Design.AdobeColor');
})->name('AdobeColor');

Route::get('/HappyHues', function () {
    return view('Design.HappyHues');
})->name('HappyHues');

Route::get('/LSGraphics', function () {
    return view('Design.LSGraphics');
})->name('LSGraphics');

Route::get('/wordmark', function () {
    return view('Design.wordmark');
})->name('wordmark');

Route::get('/LogoLounge', function () {
    return view('Design.LogoLounge');
})->name('LogoLounge');
Route::get('/Khroma', function () {
    return view('Design.Khroma');
})->name('Khroma');
Route::get('/PhosphorIcons', function () {
    return view('Design.PhosphorIcons');
})->name('PhosphorIcons');

Route::get('/Logopond', function () {
    return view('Design.Logopond');
})->name('Logopond');

Route::get('/BrandNew', function () {
    return view('Design.BrandNew');
})->name('BrandNew');

Route::get('/D99designs', function () {
    return view('Design.D99designs');
})->name('D99designs');

Route::get('/WorkingNotWorking', function () {
    return view('Design.WorkingNotWorking');
})->name('WorkingNotWorking');

Route::get('/Vecteezy', function () {
    return view('Design.Vecteezy');
})->name('Vecteezy');

Route::get('/AdobeStock', function () {
    return view('Design.AdobeStock');
})->name('AdobeStock');

Route::get('/VistaCreate', function () {
    return view('Design.VistaCreate');
})->name('VistaCreate');

Route::get('/GraphicBurger', function () {
    return view('Design.GraphicBurger');
})->name('GraphicBurger');

Route::get('/Pexel', function () {
    return view('Design.Pexel');
})->name('Pexel');

Route::get('/GoogleFonts', function () {
    return view('Design.GoogleFonts');
})->name('GoogleFonts');

Route::get('/MockupWorld', function () {
    return view('Design.MockupWorld');
})->name('MockupWorld');

Route::get('/RemoveBg', function () {
    return view('Design.RemoveBg');
})->name('RemoveBg');

Route::get('/TinyPNG', function () {
    return view('Design.TinyPNG');
})->name('TinyPNG');

Route::get('/BlushDesign', function () {
    return view('Design.BlushDesign');
})->name('BlushDesign');

//   Design End Here

// contactUs

// 1. مسار عرض الصفحة (GET) - يحمل الاسم contactUs
Route::get('/contactUs', function () {
    return view('contactUs');
})->name('contactUs');


