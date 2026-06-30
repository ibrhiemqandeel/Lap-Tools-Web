<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
        return view('index');
    }
    public function AboutUs()
    {
        return view('AboutUs');
    }
    // Developers Start

    public function Developers()
    {
        return view('Developers');
    }
    // Front End Routes Start Here
    public function FrontEnd()
    {
        return view('Dev.FrontEnd.FrontEnd');
    }
    public function StackBlitz()
    {
        return view('Dev.FrontEnd.StackBlitz');
    }
    public function MDNWebDocs()
    {
        return view('Dev.FrontEnd.MDNWebDocs');
    }
    public function W3Schools()
    {
        return view('Dev.FrontEnd.W3Schools');
    }
    public function WebDev()
    {
        return view('Dev.FrontEnd.WebDev');
    }
    public function FrontendMentor()
    {
        return view('Dev.FrontEnd.FrontendMentor');
    }
    public function CollectUI()
    {
        return view('Dev.FrontEnd.CollectUI');
    }
    public function CSSTricks()
    {
        return view('Dev.FrontEnd.CSSTricks');
    }
    public function Animista()
    {
        return view('Dev.FrontEnd.Animista');
    }
    public function UIGradients()
    {
        return view('Dev.FrontEnd.UIGradients');
    }
    public function Neumorphismio()
    {
        return view('Dev.FrontEnd.Neumorphismio');
    }
    public function CodePen()
    {
        return view('Dev.FrontEnd.CodePen');
    }
    public function CodeSandbox()
    {
        return view('Dev.FrontEnd.CodeSandbox');
    }
    public function FontAwesome()
    {
        return view('Dev.FrontEnd.FontAwesome');
    }
    public function RoadmapSh()
    {
        return view('Dev.FrontEnd.RoadmapSh');
    }
    public function LucideIcons()
    {
        return view('Dev.FrontEnd.LucideIcons');
    }
    public function UiverseIo()
    {
        return view('Dev.FrontEnd.UiverseIo');
    }
    public function caniuse()
    {
        return view('Dev.FrontEnd.caniuse');
    }
    public function GitHub()
    {
        return view('Dev.FrontEnd.GitHub');
    }
    public function Netlify()
    {
        return view('Dev.FrontEnd.Netlify');
    }
    public function Vercel()
    {
        return view('Dev.FrontEnd.Vercel');
    }
    public function freeCodeCamp()
    {
        return view('Dev.FrontEnd.freeCodeCamp');
    }
    public function JSFiddle()
    {
        return view('Dev.FrontEnd.JSFiddle');
    }
    public function UniverseWebsiteBuilder()
    {
        return view('Dev.FrontEnd.UniverseWebsiteBuilder');
    }
    public function MagicUI()
    {
        return view('Dev.FrontEnd.MagicUI');
    }
    public function Bootstrap()
    {
        return view('Dev.FrontEnd.Bootstrap');
    }
    public function Tailwind()
    {
        return view('Dev.FrontEnd.Tailwind');
    }
    public function Scrimba()
    {
        return view('Dev.FrontEnd.Scrimba');
    }
    public function OnePageLove()
    {
        return view('Dev.FrontEnd.OnePageLove');
    }
    public function LapaNinja()
    {
        return view('Dev.FrontEnd.LapaNinja');
    }
    public function ResponsivelyApp()
    {
        return view('Dev.FrontEnd.ResponsivelyApp');
    }
    public function Figma()
    {
        return view('Dev.FrontEnd.Figma');
    }
    public function PageSpeedInsights()
    {
        return view('Dev.FrontEnd.PageSpeedInsights');
    }
    public function DaisyUI()
    {
        return view('Dev.FrontEnd.DaisyUI');
    }
    // Front End Routes End Here

    // Back End Routes Start Here
    public function BackEnd()
    {
        return view('Dev.BackEnd.BackEnd');
    }
    public function DrawIo()
    {
        return view('Dev.BackEnd.DrawIo');
    }
    public function Insomnia()
    {
        return view('Dev.BackEnd.Insomnia');
    }
    public function dbdiagramIo()
    {
        return view('Dev.BackEnd.dbdiagramIo');
    }
    public function DevDocsIo()
    {
        return view('Dev.BackEnd.DevDocsIo');
    }
    public function Hoppscotch()
    {
        return view('Dev.BackEnd.Hoppscotch');
    }
    public function Postman()
    {
        return view('Dev.BackEnd.Postman');
    }
    public function JSONPlaceholder()
    {
        return view('Dev.BackEnd.JSONPlaceholder');
    }
    public function Regex101()
    {
        return view('Dev.BackEnd.Regex101');
    }
    public function ByteByteGo()
    {
        return view('Dev.BackEnd.ByteByteGo');
    }
    public function EraserIo()
    {
        return view('Dev.BackEnd.EraserIo');
    }
    public function Excalidraw()
    {
        return view('Dev.BackEnd.Excalidraw');
    }
    public function Firebase()
    {
        return view('Dev.BackEnd.Firebase');
    }
    public function Supabase()
    {
        return view('Dev.BackEnd.Supabase');
    }
    public function Railway()
    {
        return view('Dev.BackEnd.Railway');
    }
    public function Render()
    {
        return view('Dev.BackEnd.Render');
    }
    public function OWASP()
    {
        return view('Dev.BackEnd.OWASP');
    }
    public function K6Io()
    {
        return view('Dev.BackEnd.K6Io');
    }
    public function StackOverflow()
    {
        return view('Dev.BackEnd.StackOverflow');
    }
    public function GeeksforGeeks()
    {
        return view('Dev.BackEnd.GeeksforGeeks');
    }
    public function Swagger()
    {
        return view('Dev.BackEnd.Swagger');
    }
    public function MongoDB()
    {
        return view('Dev.BackEnd.MongoDB');
    }
    public function MySQL()
    {
        return view('Dev.BackEnd.MySQL');
    }
    public function PostgreSQL()
    {
        return view('Dev.BackEnd.PostgreSQL');
    }
    public function Redis()
    {
        return view('Dev.BackEnd.Redis');
    }
    public function Heroku()
    {
        return view('Dev.BackEnd.Heroku');
    }
    public function DigitalOcean()
    {
        return view('Dev.BackEnd.DigitalOcean');
    }
    public function JWTIo()
    {
        return view('Dev.BackEnd.JWTIo');
    }
    public function HaveIBeenPwned()
    {
        return view('Dev.BackEnd.HaveIBeenPwned');
    }
    public function Docker()
    {
        return view('Dev.BackEnd.Docker');
    }
    public function Cloudinary()
    {
        return view('Dev.BackEnd.Cloudinary');
    }
    public function Spatie()
    {
        return view('Dev.BackEnd.Spatie');
    }
    // Back End Routes End Here
    public function AnimationAnd3D()
    {
        return view('AnimationAnd3D.AnimationAnd3D');
    }
    public function Spline()
    {
        return view('AnimationAnd3D.Spline');
    }
    // AnimationAnd3D Start Here
    public function BlenderStudio()
    {
        return view('AnimationAnd3D.BlenderStudio');
    }
    public function CGCookie()
    {
        return view('AnimationAnd3D.CGCookie');
    }
    public function Blender()
    {
        return view('AnimationAnd3D.Blender');
    }
    public function AutodeskMaya()
    {
        return view('AnimationAnd3D.AutodeskMaya');
    }
    public function Autodesk3dsMax()
    {
        return view('AnimationAnd3D.Autodesk3dsMax');
    }
    public function Houdini()
    {
        return view('AnimationAnd3D.Houdini');
    }
    public function ZBrush()
    {
        return view('ZBrush');
    }
    public function AnimSchool()
    {
        return view('AnimSchool');
    }
    public function RenderHub()
    {
        return view('RenderHub');
    }
    public function Free3D()
    {
        return view('Free3D');
    }
    public function BlendSwap()
    {
        return view('BlendSwap');
    }
    public function TexturesCom()
    {
        return view('TexturesCom');
    }
    public function TexturesMe3D()
    {
        return view('TexturesMe3D');
    }
    public function Reallusion()
    {
        return view('Reallusion');
    }
    public function QuixelMegascans()
    {
        return view('QuixelMegascans');
    }
    public function Daz3D()
    {
        return view('Daz3D');
    }
    public function ActionVFX()
    {
        return view('ActionVFX');
    }
    public function MetaHumanCreator()
    {
        return view('MetaHumanCreator');
    }
    public function PolyHaven()
    {
        return view('PolyHaven');
    }
    public function ambientCG()
    {
        return view('ambientCG');
    }
    public function ProductionCrate()
    {
        return view('ProductionCrate');
    }
    public function VideoCopilot()
    {
        return view('VideoCopilot');
    }
    public function ChaosVRay()
    {
        return view('ChaosVRay');
    }
    public function CoronaRenderer()
    {
        return view('CoronaRenderer');
    }
    public function OctaneRender()
    {
        return view('OctaneRender');
    }
    public function Redshift()
    {
        return view('Redshift');
    }
    public function SchoolofMotion()
    {
        return view('SchoolofMotion');
    }
    public function MotionDesignSchool()
    {
        return view('MotionDesignSchool');
    }
    public function Kaiber()
    {
        return view('Kaiber');
    }
    public function MeshyAI()
    {
        return view('MeshyAI');
    }

    // AnimationAnd3D End Here
    //   Data Science Start Here
    public function DataScience()
    {
        return view('Dev.Data.DataScience');
    }
    public function DrivenData()
    {
        return view('Dev.Data.DrivenData');
    }
    public function Dataquest()
    {
        return view('Dev.Data.Dataquest');
    }
    public function Deepnote()
    {
        return view('Dev.Data.Deepnote');
    }
    public function DataCamp()
    {
        return view('Dev.Data.DataCamp');
    }
    public function Coursera()
    {
        return view('Dev.Data.Coursera');
    }
    public function KDnuggets()
    {
        return view('Dev.Data.KDnuggets');
    }
    public function CrossValidated()
    {
        return view('Dev.Data.CrossValidated');
    }
    public function JupyterNotebook()
    {
        return view('Dev.Data.JupyterNotebook');
    }
    public function Zindi()
    {
        return view('Dev.Data.Zindi');
    }
    public function AIcrowd()
    {
        return view('Dev.Data.AIcrowd');
    }
    public function GoogleDatasetSearch()
    {
        return view('Dev.Data.GoogleDatasetSearch');
    }
    public function OurWorldinData()
    {
        return view('Dev.Data.OurWorldinData');
    }
    public function DistillPub()
    {
        return view('Dev.Data.DistillPub');
    }
    public function edX()
    {
        return view('Dev.Data.edX');
    }
    public function DataGov()
    {
        return view('Dev.Data.DataGov');
    }
    public function PandasDocumentation()
    {
        return view('Dev.Data.PandasDocumentation');
    }
    public function NumPyDocumentation()
    {
        return view('Dev.Data.NumPyDocumentation');
    }
    public function LeetCode()
    {
        return view('Dev.Data.LeetCode');
    }
    public function HackerRank()
    {
        return view('Dev.Data.HackerRank');
    }
    public function PowerBI()
    {
        return view('Dev.Data.PowerBI');
    }
    public function OpenML()
    {
        return view('Dev.Data.OpenML');
    }
    public function DeepLearningAI()
    {
        return view('Dev.Data.DeepLearningAI');
    }
    public function Statology()
    {
        return view('Dev.Data.Statology');
    }
    public function Zenodo()
    {
        return view('Dev.Data.Zenodo');
    }
    public function Dask()
    {
        return view('Dev.Data.Dask');
    }
    public function WorldBankOpenData()
    {
        return view('Dev.Data.WorldBankOpenData');
    }
    // UI/UX Design Start Here
    public function UIDesign()
    {
        return view('Dev.UI.UI&UX');
    }

    public function Storyset()
    {
        return view('Dev.UI.Storyset');
    }
    public function UXPin()
    {
        return view('Dev.UI.UXPin');
    }

    public function Iconify()
    {
        return view('Dev.UI.Iconify');
    }

    public function FigmaCommunity()
    {
        return view('Dev.UI.FigmaCommunity');
    }

    public function LandBook()
    {
        return view('Dev.UI.LandBook');
    }

    public function PageFlows()
    {
        return view('Dev.UI.PageFlows');
    }

    public function SaaSframe()
    {
        return view('Dev.UI.SaaSframe');
    }

    public function RealtimeColors()
    {
        return view('Dev.UI.RealtimeColors');
    }

    public function Typewolf()
    {
        return view('Dev.UI.Typewolf');
    }

    public function FontShare()
    {
        return view('Dev.UI.FontShare');
    }

    public function Whimsical()
    {
        return view('Dev.UI.Whimsical');
    }

    public function Balsamiq()
    {
        return view('Dev.UI.Balsamiq');
    }

    public function LawsofUX()
    {
        return view('Dev.UI.LawsofUX');
    }

    public function NielsenNormanGroup()
    {
        return view('Dev.UI.NielsenNormanGroup');
    }

    public function UXArchive()
    {
        return view('Dev.UI.UXArchive');
    }

    public function GrowthDesign()
    {
        return view('Dev.UI.GrowthDesign');
    }

    public function Sketch()
    {
        return view('Dev.UI.Sketch');
    }

    public function AxureRP()
    {
        return view('Dev.UI.AxureRP');
    }

    public function AdobeXD()
    {
        return view('Dev.UI.AdobeXD');
    }

    public function UI8()
    {
        return view('Dev.UI.UI8');
    }

    // UI/UX Design End Here
    //   AI Development Start Here
    public function HuggingFace()
    {
        return view('Dev.AI.HuggingFace');
    }
    public function Kaggle()
    {
        return view('Dev.AI.Kaggle');
    }
    public function Cohere()
    {
        return view('Dev.AI.Cohere');
    }
    public function OpenAIPlatform()
    {
        return view('Dev.AI.OpenAIPlatform');
    }
    public function GoogleAIStudio()
    {
        return view('Dev.AI.GoogleAIStudio');
    }
    public function VertexAI()
    {
        return view('Dev.AI.VertexAI');
    }
    public function AnthropicConsole()
    {
        return view('Dev.AI.AnthropicConsole');
    }
    public function SiliconFlow()
    {
        return view('Dev.AI.SiliconFlow');
    }
    public function Replicate()
    {
        return view('Dev.AI.Replicate');
    }
    public function GoogleColab()
    {
        return view('Dev.AI.GoogleColab');
    }
    public function PaperspaceGradient()
    {
        return view('Dev.AI.PaperspaceGradient');
    }
    public function Cursor()
    {
        return view('Dev.AI.Cursor');
    }
    public function BoltNew()
    {
        return view('Dev.AI.BoltNew');
    }
    public function Pinecone()
    {
        return view('Dev.AI.Pinecone');
    }
    public function LangSmith()
    {
        return view('Dev.AI.LangSmith');
    }
    public function GroqCloud()
    {
        return view('Dev.AI.GroqCloud');
    }
    public function TogetherAI()
    {
        return view('Dev.AI.TogetherAI');
    }
    public function MistralAI()
    {
        return view('Dev.AI.MistralAI');
    }
    public function Ollama()
    {
        return view('Dev.AI.Ollama');
    }
    public function LMStudio()
    {
        return view('Dev.AI.LMStudio');
    }
    public function ModelScope()
    {
        return view('Dev.AI.ModelScope');
    }
    public function LlamaIndex()
    {
        return view('Dev.AI.LlamaIndex');
    }
    public function Haystack()
    {
        return view('Dev.AI.Haystack');
    }
    public function PyTorch()
    {
        return view('Dev.AI.PyTorch');
    }
    public function TensorFlow()
    {
        return view('Dev.AI.TensorFlow');
    }
    public function Keras()
    {
        return view('Dev.AI.Keras');
    }
    public function PaperswithCode()
    {
        return view('Dev.AI.PaperswithCode');
    }
    public function UCIMachineLearningRepository()
    {
        return view('Dev.AI.UCIMachineLearningRepository');
    }
    public function arXivAIPapers()
    {
        return view('Dev.AI.arXivAIPapers');
    }
    public function TowardsDataScience()
    {
        return view('Dev.AI.TowardsDataScience');
    }
    public function AnalyticsVidhya()
    {
        return view('Dev.AI.AnalyticsVidhya');
    }
    public function claude()
    {
        return view('Dev.AI.claude');
    }
    public function CrewAI()
    {
        return view('Dev.AI.CrewAI');
    }
    public function copilott()
    {
        return view('Dev.AI.copilot');
    }

    // Ai Development End Here

    // cyberSecurity Start Here
    public function cyberSecurity()
    {
        return view('Dev.cyberSecurity.cyberSecurity');
    }

    public function TryHackMe()
    {
        return view('Dev.cyberSecurity.TryHackMe');
    }
    public function MITREATTCK()
    {
        return view('Dev.cyberSecurity.MITREATTCK');
    }

    public function HackTheBox()
    {
        return view('Dev.cyberSecurity.HackTheBox');
    }

    public function PortSwiggerWebSecurityAcademy()
    {
        return view('Dev.cyberSecurity.PortSwiggerWebSecurityAcademy');
    }

    public function OverTheWire()
    {
        return view('Dev.cyberSecurity.OverTheWire');
    }

    public function picoCTF()
    {
        return view('Dev.cyberSecurity.picoCTF');
    }

    public function CTFtime()
    {
        return view('Dev.cyberSecurity.CTFtime');
    }

    public function HackerOne()
    {
        return view('Dev.cyberSecurity.HackerOne');
    }

    public function Bugcrowd()
    {
        return view('Dev.cyberSecurity.Bugcrowd');
    }

    public function TheHackerNews()
    {
        return view('Dev.cyberSecurity.TheHackerNews');
    }

    public function CVEMitre()
    {
        return view('Dev.cyberSecurity.CVEMitre');
    }

    public function BleepingComputer()
    {
        return view('Dev.cyberSecurity.BleepingComputer');
    }

    public function CyberDefenders()
    {
        return view('Dev.cyberSecurity.CyberDefenders');
    }

    public function LetsDefend()
    {
        return view('Dev.cyberSecurity.LetsDefend');
    }

    public function VulnHub()
    {
        return view('Dev.cyberSecurity.VulnHub');
    }

    public function OffSecLearningLibrary()
    {
        return view('Dev.cyberSecurity.OffSecLearningLibrary');
    }

    public function Cybrary()
    {
        return view('Dev.cyberSecurity.Cybrary');
    }

    public function AntisyphonTraining()
    {
        return view('Dev.cyberSecurity.AntisyphonTraining');
    }

    public function DarkReading()
    {
        return view('Dev.cyberSecurity.DarkReading');
    }

    public function DanielMiessler()
    {
        return view('Dev.cyberSecurity.DanielMiessler');
    }

    public function NISTNVD()
    {
        return view('Dev.cyberSecurity.NISTNVD');
    }

    public function Intigriti()
    {
        return view('Dev.cyberSecurity.Intigriti');
    }

    public function OpenBugBounty()
    {
        return view('Dev.cyberSecurity.OpenBugBounty');
    }

    public function KrebsonSecurity()
    {
        return view('Dev.cyberSecurity.KrebsonSecurity');
    }

    public function OSINTFramework()
    {
        return view('Dev.cyberSecurity.OSINTFramework');
    }

    public function Shodan()
    {
        return view('Dev.cyberSecurity.Shodan');
    }

    public function Censys()
    {
        return view('Dev.cyberSecurity.Censys');
    }

    public function AnyRun()
    {
        return view('Dev.cyberSecurity.AnyRun');
    }

    public function HybridAnalysis()
    {
        return view('Dev.cyberSecurity.HybridAnalysis');
    }

    public function VirusTotal()
    {
        return view('Dev.cyberSecurity.VirusTotal');
    }

    public function ExploitDatabase()
    {
        return view('Dev.cyberSecurity.ExploitDatabase');
    }

    public function RootMe()
    {
        return view('Dev.cyberSecurity.RootMe');
    }
    // cyberSecurity End Here

    // Developers End
    // office Start Here
    public function office()
    {
        return view('office.office');
    }

    public function powerpoint()
    {
        return view('office.powerpoint.powerpoint');
    }
    public function word()
    {
        return view('office.word.word');
    }
    public function WordDon()
    {
        return view('office.word.WordDon');
    }
    public function Grammarly()
    {
        return view('office.word.Grammarly');
    }
    public function QuillBot()
    {
        return view('office.word.QuillBot');
    }
    public function LanguageTool()
    {
        return view('office.word.LanguageTool');
    }
    public function HemingwayEditor()
    {
        return view('office.word.HemingwayEditor');
    }
    public function Scribbr()
    {
        return view('office.word.Scribbr');
    }
    public function Mendeley()
    {
        return view('office.word.Mendeley');
    }
    public function Zotero()
    {
        return view('office.word.Zotero');
    }
    public function CanvaDocs()
    {
        return view('office.word.CanvaDocs');
    }
    public function TinyWowWordTools()
    {
        return view('office.word.TinyWowWordTools');
    }
    public function iLovePDF()
    {
        return view('office.word.iLovePDF');
    }
    public function ProWritingAid()
    {
        return view('office.word.ProWritingAid');
    }
    public function DeepLWrite()
    {
        return view('office.word.DeepLWrite');
    }
    public function Writesonic()
    {
        return view('office.word.Writesonic');
    }
    public function RefWorks()
    {
        return view('office.word.RefWorks');
    }
    public function CopyAi()
    {
        return view('office.word.CopyAi');
    }
    public function jasper()
    {
        return view('office.word.jasper');
    }
    public function Rytr()
    {
        return view('office.word.Rytr');
    }
    public function EndNote()
    {
        return view('office.word.EndNote');
    }
    public function Anyword()
    {
        return view('office.word.Anyword');
    }
    public function Paperpile()
    {
        return view('office.word.Paperpile');
    }
    public function Turnitin()
    {
        return view('office.word.Turnitin');
    }
    public function Copyscape()
    {
        return view('office.word.Copyscape');
    }
    public function Template()
    {
        return view('office.word.Template');
    }
    public function Vertex42()
    {
        return view('office.word.Vertex42');
    }
    public function PoweredTemplate()
    {
        return view('office.word.PoweredTemplate');
    }
    public function PDF24()
    {
        return view('office.word.PDF24');
    }
    public function GoogleScholar()
    {
        return view('office.word.GoogleScholar');
    }
    public function ResearchGate()
    {
        return view('office.word.ResearchGate');
    }
    public function SemanticScholar()
    {
        return view('office.word.SemanticScholar');
    }
    public function PubMed()
    {
        return view('office.word.PubMed');
    }
    public function JSTOR()
    {
        return view('office.word.JSTOR');
    }
    public function TextFixer()
    {
        return view('office.word.TextFixer');
    }
    public function WordCounter()
    {
        return view('office.word.WordCounter');
    }
    public function characterCountOnline()
    {
        return view('office.word.characterCountOnline');
    }
    public function Diffchecker()
    {
        return view('office.word.Diffchecker');
    }
    public function WinMerge()
    {
        return view('office.word.WinMerge');
    }
    // office End Here
    // powerpoint Start Here

    public function Slidesgo()
    {
        return view('office.powerpoint.Slidesgo');
    }
    public function PowerPointDon()
    {
        return view('office.powerpoint.PowerPointDon');
    }
    public function SlidesCarnival()
    {
        return view('office.powerpoint.SlidesCarnival');
    }
    public function PresentationGO()
    {
        return view('office.powerpoint.PresentationGO');
    }
    public function TheNounProject()
    {
        return view('office.powerpoint.TheNounProject');
    }
    public function Visme()
    {
        return view('office.powerpoint.Visme');
    }
    public function infogram()
    {
        return view('office.powerpoint.infogram');
    }
    public function Gamma()
    {
        return view('office.powerpoint.Gamma');
    }
    public function BeautifulAi()
    {
        return view('office.powerpoint.BeautifulAi');
    }
    public function SlideModel()
    {
        return view('office.powerpoint.SlideModel');
    }
    public function FPPT()
    {
        return view('office.powerpoint.FPPT');
    }
    public function Showeet()
    {
        return view('office.powerpoint.Showeet');
    }
    public function SlideHunter()
    {
        return view('office.powerpoint.SlideHunter');
    }
    public function Burst()
    {
        return view('office.powerpoint.Burst');
    }
    public function Venngage()
    {
        return view('office.powerpoint.Venngage');
    }
    public function Piktochart()
    {
        return view('office.powerpoint.Piktochart');
    }
    public function SlideGeeks()
    {
        return view('office.powerpoint.SlideGeeks');
    }
    public function TemplateMonster()
    {
        return view('office.powerpoint.TemplateMonster');
    }
    public function MicrosoftOfficeTemplates()
    {
        return view('office.powerpoint.MicrosoftOfficeTemplates');
    }
    public function StockSnap()
    {
        return view('office.powerpoint.StockSnap');
    }
    public function WPSOfficeTemplates()
    {
        return view('office.powerpoint.WPSOfficeTemplates');
    }
    public function SlidesMania()
    {
        return view('office.powerpoint.SlidesMania');
    }
    public function docsGoogle()
    {
        return view('office.powerpoint.docsGoogle');
    }
    // Excel Start Here

    public function excel()
    {
        return view('office.excel.excel');
    }
    public function ExcelDon()
    {
        return view('office.excel.ExcelDon');
    }
    public function MicrosoftExcelTraining()
    {
        return view('office.Excel.MicrosoftExcelTraining');
    }
    public function ExcelEasy()
    {
        return view('office.Excel.ExcelEasy');
    }
    public function ExcelJet()
    {
        return view('office.Excel.ExcelJet');
    }
    public function Spreadsheeto()
    {
        return view('office.Excel.Spreadsheeto');
    }
    public function MyOnlineTrainingHub()
    {
        return view('office.Excel.MyOnlineTrainingHub');
    }
    public function Spreadsheet123()
    {
        return view('office.Excel.Spreadsheet123');
    }
    public function TemplateNet()
    {
        return view('office.Excel.TemplateNet');
    }
    public function CloudConvert()
    {
        return view('office.Excel.CloudConvert');
    }
    public function Datawrapper()
    {
        return view('office.Excel.Datawrapper');
    }
    public function Flourish()
    {
        return view('office.Excel.Flourish');
    }
    public function Convertio()
    {
        return view('office.Excel.Convertio');
    }
    public function OpenRefine()
    {
        return view('office.Excel.OpenRefine');
    }
    public function Airtable()
    {
        return view('office.Excel.Airtable');
    }
    public function ZohoSheet()
    {
        return view('office.Excel.ZohoSheet');
    }
    public function ONLYOFFICE()
    {
        return view('office.Excel.ONLYOFFICE');
    }
    public function ExcelFormulaBot()
    {
        return view('office.Excel.ExcelFormulaBot');
    }
    public function formulasHq()
    {
        return view('office.Excel.formulasHq');
    }
    public function AblebitsExcelBlog()
    {
        return view('office.Excel.AblebitsExcelBlog');
    }
    public function GPTExcel()
    {
        return view('office.Excel.GPTExcel');
    }
    public function AjelixAI()
    {
        return view('office.Excel.AjelixAI');
    }
    public function sheetAi()
    {
        return view('office.Excel.sheetAi');
    }
    public function Indzara()
    {
        return view('office.Excel.Indzara');
    }
    public function ExcelDashboardSchool()
    {
        return view('office.Excel.ExcelDashboardSchool');
    }
    public function Someka()
    {
        return view('office.Excel.Someka');
    }
    public function Eloquens()
    {
        return view('office.Excel.Eloquens');
    }
    public function QlikSense()
    {
        return view('office.Excel.QlikSense');
    }
    public function Plotly()
    {
        return view('office.Excel.Plotly');
    }
    public function ApacheSuperset()
    {
        return view('office.Excel.ApacheSuperset');
    }
    public function Baserow()
    {
        return view('office.Excel.Baserow');
    }

    // Excel End Here

    // powerpoint End Here

    // Editing Start Here
    public function Editing()
    {
        return view('Editing.Editing');
    }
    public function Photopea()
    {
        return view('Editing.Photopea');
    }
    public function Clipchamp()
    {
        return view('Editing.Clipchamp');
    }
    public function AdobePremierePro()
    {
        return view('Editing.AdobePremierePro');
    }
    public function DaVinciResolve()
    {
        return view('Editing.DaVinciResolve');
    }
    public function CapCut()
    {
        return view('Editing.CapCut');
    }
    public function VeedIo()
    {
        return view('Editing.VeedIo');
    }
    public function InVideo()
    {
        return view('Editing.InVideo');
    }
    public function Animoto()
    {
        return view('Editing.Animoto');
    }
    public function Mixkit()
    {
        return view('Editing.Mixkit');
    }
    public function EpidemicSound()
    {
        return view('Editing.EpidemicSound');
    }
    public function Pixabay()
    {
        return view('Editing.Pixabay');
    }
    public function PexelsVideo()
    {
        return view('Editing.PexelsVideo');
    }
    public function Videezy()
    {
        return view('Editing.Videezy');
    }
    public function MotionArray()
    {
        return view('Editing.MotionArray');
    }
    public function FrameIo()
    {
        return view('Editing.FrameIo');
    }
    public function ShareAE()
    {
        return view('Editing.ShareAE');
    }
    public function VFXDownload()
    {
        return view('Editing.VFXDownload');
    }
    public function FlexClip()
    {
        return view('Editing.FlexClip');
    }
    public function Runway()
    {
        return view('Editing.Runway');
    }
    public function WeVideo()
    {
        return view('Editing.WeVideo');
    }
    public function WaveVideo()
    {
        return view('Editing.WaveVideo');
    }
    public function Renderforest()
    {
        return view('Editing.Renderforest');
    }
    public function OpusClip()
    {
        return view('Editing.OpusClip');
    }
    public function Pictory()
    {
        return view('Editing.Pictory');
    }
    public function Descript()
    {
        return view('Editing.Descript');
    }
    public function Lumen5()
    {
        return view('Editing.Lumen5');
    }
    public function Filmora()
    {
        return view('Editing.Filmora');
    }
    public function Flixier()
    {
        return view('Editing.Flixier');
    }
    public function Biteable()
    {
        return view('Editing.Biteable');
    }
    public function Animaker()
    {
        return view('Editing.Animaker');
    }
    public function Shotcut()
    {
        return view('Editing.Shotcut');
    }

    public function Kapwing()
    {
        return view('Editing.Kapwing');
    }

    // Editing End Here

    //  Mobile App Start Here
    public function MobileApp()
    {
        return view('Dev.Mobile.MobileApp');
    }
    public function AndroidDevelopers()
    {
        return view('Dev.Mobile.AndroidDevelopers');
    }
    public function AppleDeveloper()
    {
        return view('Dev.Mobile.AppleDeveloper');
    }
    public function AppGyver()
    {
        return view('Dev.Mobile.AppGyver');
    }

    public function FlutterDev()
    {
        return view('Dev.Mobile.FlutterDev');
    }
    public function ReactNativeDev()
    {
        return view('Dev.Mobile.ReactNativeDev');
    }
    public function pubDev()
    {
        return view('Dev.Mobile.pubDev');
    }
    public function npm()
    {
        return view('Dev.Mobile.npm');
    }

    public function MaterialDesign()
    {
        return view('Dev.Mobile.MaterialDesign');
    }
    public function RiveApp()
    {
        return view('Dev.Mobile.RiveApp');
    }
    public function v0Dev()
    {
        return view('Dev.Mobile.v0Dev');
    }
    public function Codemagic()
    {
        return view('Dev.Mobile.Codemagic');
    }
    public function ExpoApplicationServices()
    {
        return view('Dev.Mobile.ExpoApplicationServices');
    }
    public function AppIconGenerator()
    {
        return view('Dev.Mobile.AppIconGenerator');
    }
    public function Haikei()
    {
        return view('Dev.Mobile.Haikei');
    }
    public function Diawi()
    {
        return view('Dev.Mobile.Diawi');
    }
    public function BrowserStack()
    {
        return view('Dev.Mobile.BrowserStack');
    }
    public function JSONCrack()
    {
        return view('Dev.Mobile.JSONCrack');
    }
    public function Mockoon()
    {
        return view('Dev.Mobile.Mockoon');
    }
    public function mockapi()
    {
        return view('Dev.Mobile.mockapi');
    }
    public function DataAii()
    {
        return view('Dev.Mobile.DataAi');
    }
    public function Appradar()
    {
        return view('Dev.Mobile.Appradar');
    }
    public function RevenueCat()
    {
        return view('Dev.Mobile.RevenueCat');
    }
    public function OneSignal()
    {
        return view('Dev.Mobile.OneSignal');
    }
    public function AppFollow()
    {
        return view('Dev.Mobile.AppFollow');
    }
    public function SensorTower()
    {
        return view('Dev.Mobile.SensorTower');
    }
    public function medium()
    {
        return view('Dev.Mobile.medium');
    }
    public function FlutterGems()
    {
        return view('Dev.Mobile.FlutterGems');
    }
    public function Kotlinlang()
    {
        return view('Dev.Mobile.Kotlinlang');
    }
    public function swift()
    {
        return view('Dev.Mobile.swift.');

        // Mobile App End Here
    }
    // GameDevelopment Start Here
    public function GamesDevelopment()
    {
        return view('Dev.Games.GamesDevelopment');
    }
    public function Unity()
    {
        return view('Dev.Games.Unity');
    }

    public function UnrealEngine()
    {
        return view('Dev.Games.UnrealEngine');
    }
    public function Construct()
    {
        return view('Dev.Games.Construct');
    }
    public function GodotEngine()
    {
        return view('Dev.Games.GodotEngine');
    }
    public function ItchIo()
    {
        return view('Dev.Games.ItchIo');
    }
    public function Sketchfab()
    {
        return view('Dev.Games.Sketchfab');
    }
    public function TurboSquid()
    {
        return view('Dev.Games.TurboSquid');
    }
    public function OpenGameArt()
    {
        return view('Dev.Games.OpenGameArt');
    }
    public function Freesound()
    {
        return view('Dev.Games.Freesound');
    }
    public function Soniss()
    {
        return view('Dev.Games.Soniss');
    }
    public function Incompetech()
    {
        return view('Dev.Games.Incompetech');
    }
    public function StackExchange()
    {
        return view('Dev.Games.StackExchange');
    }
    public function GameDeveloperWeb()
    {
        return view('Dev.Games.GameDeveloperWeb');
    }
    public function GameMaker()
    {
        return view('Dev.Games.GameMaker');
    }
    public function UnityLearn()
    {
        return view('Dev.Games.UnityLearn');
    }
    public function brackeys()
    {
        return view('Dev.Games.brackeys');
    }
    public function KenneyAssets()
    {
        return view('Dev.Games.KenneyAssets');
    }
    public function PolyPizza()
    {
        return view('Dev.Games.PolyPizza');
    }
    public function IndieDB()
    {
        return view('Dev.Games.IndieDB');
    }
    public function Steamworks()
    {
        return view('Dev.Games.Steamworks');
    }
    public function GameDesignLounge()
    {
        return view('Dev.Games.GameDesignLounge');
    }
    public function CGTrader()
    {
        return view('Dev.Games.CGTrader');
    }
    public function Mixamo()
    {
        return view('Dev.Games.Mixamo');
    }
    public function Cascadeur()
    {
        return view('Dev.Games.Cascadeur');
    }
    public function InworldAI()
    {
        return view('Dev.Games.InworldAI');
    }
    public function LeonardoAI()
    {
        return view('Dev.Games.LeonardoAI');
    }
    public function Phaser()
    {
        return view('Dev.Games.Phaser');
    }
    public function BabylonJs()
    {
        return view('Dev.Games.BabylonJs');
    }
    public function ThreeJs()
    {
        return view('Dev.Games.ThreeJs');
    }
    public function PlayFab()
    {
        return view('Dev.Games.PlayFab');
    }
    public function GameAnalytics()
    {
        return view('Dev.Games.GameAnalytics');
    }
    public function Level80()
    {
        return view('Dev.Games.Level80');
    }
    public function PlasticSCM()
    {
        return view('Dev.Games.PlasticSCM');
    }
    public function Perforce()
    {
        return view('Dev.Games.Perforce');
    }
    public function RedBlobGames()
    {
        return view('Dev.Games.RedBlobGames');
    }
    public function GlobalGameJam()
    {
        return view('Dev.Games.GlobalGameJam');
    }

    // GameDevelopment End Here

    // Design Start Here
    public function Design()
    {
        return view('Design.Design');
    }

    // AIROOM Start Here
    public function AIROOM()
    {
        return view('AIROOM.AIROOM');
    }

    // ChatAI Start Here
    public function ChatAI()
    {
        return view('AIROOM.ChatAI.ChatAI');
    }
    public function MetaAI()
    {
        return view('AIROOM.ChatAI.MetaAI');
    }
    // ChatAI End Here

    // PhotosAndvideos Start Here
    public function PhotosAndvideos()
    {
        return view('AIROOM.PhotosAndvideos.PhotosAndvideos');
    }
    public function Midjourney()
    {
        return view('AIROOM.PhotosAndvideos.Midjourney');
    }
    public function StableDiffusion()
    {
        return view('AIROOM.PhotosAndvideos.StableDiffusion');
    }
    public function AdobeFirefly()
    {
        return view('AIROOM.PhotosAndvideos.AdobeFirefly');
    }
    public function Ideogram()
    {
        return view('AIROOM.PhotosAndvideos.Ideogram');
    }
    public function Recraft()
    {
        return view('AIROOM.PhotosAndvideos.Recraft');
    }
    public function Playground()
    {
        return view('AIROOM.PhotosAndvideos.Playground');
    }
    public function NightCafe()
    {
        return view('AIROOM.PhotosAndvideos.NightCafe');
    }
    public function MageSpace()
    {
        return view('AIROOM.PhotosAndvideos.MageSpace');
    }
    public function KlingAI()
    {
        return view('AIROOM.PhotosAndvideos.KlingAI');
    }
    public function HailuoAI()
    {
        return view('AIROOM.PhotosAndvideos.HailuoAI');
    }
    public function Pika()
    {
        return view('AIROOM.PhotosAndvideos.Pika');
    }
    public function LumaDreamMachine()
    {
        return view('AIROOM.PhotosAndvideos.LumaDreamMachine');
    }
    public function PixVerseAI()
    {
        return view('AIROOM.PhotosAndvideos.PixVerseAI');
    }
    public function HeyGen()
    {
        return view('AIROOM.PhotosAndvideos.HeyGen');
    }
    public function Synthesia()
    {
        return view('AIROOM.PhotosAndvideos.Synthesia');
    }
    public function nanobanana()
    {
        return view('AIROOM.PhotosAndvideos.nanobanana');
    }
    public function TensorArt()
    {
        return view('AIROOM.PhotosAndvideos.TensorArt');
    }
    public function Civitai()
    {
        return view('AIROOM.PhotosAndvideos.Civitai');
    }
    public function Craiyon()
    {
        return view('AIROOM.PhotosAndvideos.Craiyon');
    }
    public function StarryAI()
    {
        return view('AIROOM.PhotosAndvideos.StarryAI');
    }
    public function Artbreeder()
    {
        return view('AIROOM.PhotosAndvideos.Artbreeder');
    }
    public function FotorAI()
    {
        return view('AIROOM.PhotosAndvideos.FotorAI');
    }
    public function DeepAI()
    {
        return view('AIROOM.PhotosAndvideos.DeepAI');
    }
    public function ImagineArt()
    {
        return view('AIROOM.PhotosAndvideos.ImagineArt');
    }
    public function GetimgAi()
    {
        return view('AIROOM.PhotosAndvideos.GetimgAi');
    }
    public function SeaArtAI()
    {
        return view('AIROOM.PhotosAndvideos.SeaArtAI');
    }
    public function OpenArt()
    {
        return view('AIROOM.PhotosAndvideos.OpenArt');
    }
    public function DzineAI()
    {
        return view('AIROOM.PhotosAndvideos.DzineAI');
    }
    public function HaiperAI()
    {
        return view('AIROOM.PhotosAndvideos.HaiperAI');
    }
    public function ViduAI()
    {
        return view('AIROOM.PhotosAndvideos.ViduAI');
    }
    public function HiggsfieldAI()
    {
        return view('AIROOM.PhotosAndvideos.HiggsfieldAI');
    }


    // PhotosAndvideos End Here
    // Automation Start Here
    public function Automation()
    {
        return view('AIROOM.Automation.Automation');
    }

    public function Zapier()
    {
        return view('AIROOM.Automation.Zapier');
    }
    public function nOps()
    {
        return view('AIROOM.Automation.nOps');
    }
    public function Make()
    {
        return view('AIROOM.Automation.Make');
    }
    public function n8n()
    {
        return view('AIROOM.Automation.n8n');
    }
    public function Pipedream()
    {
        return view('AIROOM.Automation.Pipedream');
    }
    public function IFTTT()
    {
        return view('AIROOM.Automation.IFTTT');
    }
    public function RelayApp()
    {
        return view('AIROOM.Automation.RelayApp');
    }
    public function Albato()
    {
        return view('AIROOM.Automation.Albato');
    }
    public function Integrately()
    {
        return view('AIROOM.Automation.Integrately');
    }
    public function AgentGPT()
    {
        return view('AIROOM.Automation.AgentGPT');
    }
    public function AutoGPT()
    {
        return view('AIROOM.Automation.AutoGPT');
    }
    public function Flowise()
    {
        return view('AIROOM.Automation.Flowise');
    }
    public function Dify()
    {
        return view('AIROOM.Automation.Dify');
    }
    public function ActiveCampaign()
    {
        return view('AIROOM.Automation.ActiveCampaign');
    }
    public function Mailchimp()
    {
        return view('AIROOM.Automation.Mailchimp');
    }
    public function Brevo()
    {
        return view('AIROOM.Automation.Brevo');
    }
    public function HubSpot()
    {
        return view('AIROOM.Automation.HubSpot');
    }
    public function Buffer()
    {
        return view('AIROOM.Automation.Buffer');
    }
    public function Publer()
    {
        return view('AIROOM.Automation.Publer');
    }
    public function Metricool()
    {
        return view('AIROOM.Automation.Metricool');
    }
    public function UiPath()
    {
        return view('AIROOM.Automation.UiPath');
    }
    public function AutomationAnywhere()
    {
        return view('AIROOM.Automation.AutomationAnywhere');
    }
    public function Robocorp()
    {
        return view('AIROOM.Automation.Robocorp');
    }
    public function LindyAI()
    {
        return view('AIROOM.Automation.LindyAI');
    }
    public function Gumloop()
    {
        return view('AIROOM.Automation.Gumloop');
    }
    public function Bardeen()
    {
        return view('AIROOM.Automation.Bardeen');
    }
    public function Airtop()
    {
        return view('AIROOM.Automation.Airtop');
    }
    public function TaskadeAIAgents()
    {
        return view('AIROOM.Automation.TaskadeAIAgents');
    }
    public function Workato()
    {
        return view('AIROOM.Automation.Workato');
    }
    public function TrayAi()
    {
        return view('AIROOM.Automation.TrayAi');
    }
    public function RelevanceAI()
    {
        return view('AIROOM.Automation.RelevanceAI');
    }
    public function SuperAGI()
    {
        return view('AIROOM.Automation.SuperAGI');
    }
    public function LangChain()
    {
        return view('AIROOM.Automation.LangChain');
    }
    public function Temporal()
    {
        return view('AIROOM.Automation.Temporal');
    }
    public function Kestra()
    {
        return view('AIROOM.Automation.Kestra');
    }
    public function Glide()
    {
        return view('AIROOM.Automation.Glide');
    }


    // Automation End Here
    public function ChatGPT()
    {
        return view('AIROOM.ChatAI.ChatGPT');
    }
    public function Gemini()
    {
        return view('AIROOM.ChatAI.Gemini');
    }
    public function Claudee()
    {
        return view('AIROOM.ChatAI.Claude');
    }
    public function Copilot()
    {
        return view('AIROOM.ChatAI.Copilot');
    }
    public function deepseek()
    {
        return view('AIROOM.ChatAI.deepseek');
    }
    public function munas()
    {
        return view('AIROOM.ChatAI.munas');
    }
    public function Perplexity()
    {
        return view('AIROOM.ChatAI.Perplexity');
    }
    public function YouCom()
    {
        return view('AIROOM.ChatAI.YouCom');
    }
    public function Phind()
    {
        return view('AIROOM.ChatAI.Phind');
    }
    public function Poe()
    {
        return view('AIROOM.ChatAI.Poe');
    }
    public function CharacterAI()
    {
        return view('AIROOM.ChatAI.CharacterAI');
    }
    public function Replika()
    {
        return view('AIROOM.ChatAI.Replika');
    }
    public function Grok()
    {
        return view('AIROOM.ChatAI.Grok');
    }
    public function PiAI()
    {
        return view('AIROOM.ChatAI.PiAI');
    }
    public function Mistral()
    {
        return view('AIROOM.ChatAI.Mistral');
    }
    public function Qwen()
    {
        return view('AIROOM.ChatAI.Qwen');
    }
    public function Kimi()
    {
        return view('AIROOM.ChatAI.Kimi');
    }
    public function HIX()
    {
        return view('AIROOM.ChatAI.HIX');
    }
    public function Monica()
    {
        return view('AIROOM.ChatAI.Monica');
    }
    public function Blackbox()
    {
        return view('AIROOM.ChatAI.Blackbox');
    }
    public function AskAI()
    {
        return view('AIROOM.ChatAI.AskAI');
    }
    public function Nova()
    {
        return view('AIROOM.ChatAI.Nova');
    }
    public function GenieAI()
    {
        return view('AIROOM.ChatAI.GenieAI');
    }
    public function ChatOn()
    {
        return view('AIROOM.ChatAI.ChatOn');
    }
    public function Elicit()
    {
        return view('AIROOM.ChatAI.Elicit');
    }
    public function Consensus()
    {
        return view('AIROOM.ChatAI.Consensus');
    }
    public function SciSpace()
    {
        return view('AIROOM.ChatAI.SciSpace');
    }
    public function ResearchRabbit()
    {
        return view('AIROOM.ChatAI.ResearchRabbit');
    }
    public function NotionAI()
    {
        return view('AIROOM.ChatAI.NotionAI');
    }
    public function ClickUp()
    {
        return view('AIROOM.ChatAI.ClickUp');
    }

    // Automation End Here

    // AIROOM End Here

    public function contactUs()
    {
        return view('contactUs');
    }
    public function Behance()
    {
        return view('Design.Behance');
    }
    public function Dribbble()
    {
        return view('Design.Dribbble');
    }
    public function Pinterest()
    {
        return view('Design.Pinterest');
    }
    public function Awwwards()
    {
        return view('Design.Awwwards');
    }
    public function ArtStation()
    {
        return view('Design.ArtStation');
    }
    public function Envato()
    {
        return view('Design.Envato');
    }
    public function Canva()
    {
        return view('Design.Canva');
    }
    public function Designspiration()
    {
        return view('Design.Designspiration');
    }
    public function Lottiefiles()
    {
        return view('Design.Lottiefiles');
    }
    public function Coolors()
    {
        return view('Design.Coolors');
    }
    public function Unsplash()
    {
        return view('Design.Unsplash');
    }
    public function Icons8()
    {
        return view('Design.Icons8');
    }
    public function Magnific()
    {
        return view('Design.Magnific');
    }
    public function Mobbin()
    {
        return view('Design.Mobbin');
    }
    public function Flaticon()
    {
        return view('Design.Flaticon');
    }
    public function unDraw()
    {
        return view('Design.unDraw');
    }
    public function AdobeColor()
    {
        return view('Design.AdobeColor');
    }
    public function HappyHues()
    {
        return view('Design.HappyHues');
    }
    public function LSGraphics()
    {
        return view('Design.LSGraphics');
    }
    public function wordmark()
    {
        return view('Design.wordmark');
    }
    public function LogoLounge()
    {
        return view('Design.LogoLounge');
    }
    public function Khroma()
    {
        return view('Design.Khroma');
    }
    public function PhosphorIcons()
    {
        return view('Design.PhosphorIcons');
    }
    public function Logopond()
    {
        return view('Design.Logopond');
    }
    public function BrandNew()
    {
        return view('Design.BrandNew');
    }
    public function D99designs()
    {
        return view('Design.D99designs');
    }
    public function WorkingNotWorking()
    {
        return view('Design.WorkingNotWorking');
    }
    public function Vecteezy()
    {
        return view('Design.Vecteezy');
    }
    public function AdobeStock()
    {
        return view('Design.AdobeStock');
    }
    public function VistaCreate()
    {
        return view('Design.VistaCreate');
    }
    public function GraphicBurger()
    {
        return view('Design.GraphicBurger');
    }
    public function Pexel()
    {
        return view('Design.Pexel');
    }
    public function GoogleFonts()
    {
        return view('Design.GoogleFonts');
    }
    public function MockupWorld()
    {
        return view('Design.MockupWorld');
    }
    public function RemoveBg()
    {
        return view('Dev.Design.RemoveBg');
    }

    public function TinyPNG()
    {
        return view('Dev.Design.TinyPNG');
    }
    public function BlushDesign()
    {
        return view('Dev.Design.BlushDesign');
    }
    // Design End Here
}
