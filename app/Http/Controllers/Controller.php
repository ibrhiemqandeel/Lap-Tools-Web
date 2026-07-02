<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
        return view('index', [
            'PageTitle' => 'Index | Lap Tools Web',
            'PageDescription' => 'Discover Index, a curated resource for digital tools and online resources on Lap Tools Web.'
        ]);
    }
    public function AboutUs()
    {
        return view('AboutUs', [
            'PageTitle' => 'About Us | Lap Tools Web',
            'PageDescription' => 'Discover About Us, a curated resource for digital tools and online resources on Lap Tools Web.'
        ]);
    }
    // Developers Start

    public function Developers()
    {
        return view('Developers', [
            'PageTitle' => 'Developers | Lap Tools Web',
            'PageDescription' => 'Discover Developers, a curated resource for developer resources and tools on Lap Tools Web.'
        ]);
    }
    // Front End Routes Start Here
    public function FrontEnd()
    {
        return view('Dev.FrontEnd.FrontEnd', [
            'PageTitle' => 'Front End | Lap Tools Web',
            'PageDescription' => 'Discover Front End, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function StackBlitz()
    {
        return view('Dev.FrontEnd.StackBlitz', [
            'PageTitle' => 'Stack Blitz | Lap Tools Web',
            'PageDescription' => 'Discover Stack Blitz, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function MDNWebDocs()
    {
        return view('Dev.FrontEnd.MDNWebDocs', [
            'PageTitle' => 'MDN Web Docs | Lap Tools Web',
            'PageDescription' => 'Discover MDN Web Docs, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function W3Schools()
    {
        return view('Dev.FrontEnd.W3Schools', [
            'PageTitle' => 'W3 Schools | Lap Tools Web',
            'PageDescription' => 'Discover W3 Schools, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function WebDev()
    {
        return view('Dev.FrontEnd.WebDev', [
            'PageTitle' => 'Web Dev | Lap Tools Web',
            'PageDescription' => 'Discover Web Dev, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function FrontendMentor()
    {
        return view('Dev.FrontEnd.FrontendMentor', [
            'PageTitle' => 'Frontend Mentor | Lap Tools Web',
            'PageDescription' => 'Discover Frontend Mentor, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function CollectUI()
    {
        return view('Dev.FrontEnd.CollectUI', [
            'PageTitle' => 'Collect UI | Lap Tools Web',
            'PageDescription' => 'Discover Collect UI, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function CSSTricks()
    {
        return view('Dev.FrontEnd.CSSTricks', [
            'PageTitle' => 'CSS Tricks | Lap Tools Web',
            'PageDescription' => 'Discover CSS Tricks, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function Animista()
    {
        return view('Dev.FrontEnd.Animista', [
            'PageTitle' => 'Animista | Lap Tools Web',
            'PageDescription' => 'Discover Animista, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function UIGradients()
    {
        return view('Dev.FrontEnd.UIGradients', [
            'PageTitle' => 'UI Gradients | Lap Tools Web',
            'PageDescription' => 'Discover UI Gradients, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function Neumorphismio()
    {
        return view('Dev.FrontEnd.Neumorphismio', [
            'PageTitle' => 'Neumorphismio | Lap Tools Web',
            'PageDescription' => 'Discover Neumorphismio, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function CodePen()
    {
        return view('Dev.FrontEnd.CodePen', [
            'PageTitle' => 'Code Pen | Lap Tools Web',
            'PageDescription' => 'Discover Code Pen, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function CodeSandbox()
    {
        return view('Dev.FrontEnd.CodeSandbox', [
            'PageTitle' => 'Code Sandbox | Lap Tools Web',
            'PageDescription' => 'Discover Code Sandbox, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function FontAwesome()
    {
        return view('Dev.FrontEnd.FontAwesome', [
            'PageTitle' => 'Font Awesome | Lap Tools Web',
            'PageDescription' => 'Discover Font Awesome, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function RoadmapSh()
    {
        return view('Dev.FrontEnd.RoadmapSh', [
            'PageTitle' => 'Roadmap Sh | Lap Tools Web',
            'PageDescription' => 'Discover Roadmap Sh, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function LucideIcons()
    {
        return view('Dev.FrontEnd.LucideIcons', [
            'PageTitle' => 'Lucide Icons | Lap Tools Web',
            'PageDescription' => 'Discover Lucide Icons, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function UiverseIo()
    {
        return view('Dev.FrontEnd.UiverseIo', [
            'PageTitle' => 'Uiverse Io | Lap Tools Web',
            'PageDescription' => 'Discover Uiverse Io, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function caniuse()
    {
        return view('Dev.FrontEnd.caniuse', [
            'PageTitle' => 'Caniuse | Lap Tools Web',
            'PageDescription' => 'Discover Caniuse, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function GitHub()
    {
        return view('Dev.FrontEnd.GitHub', [
            'PageTitle' => 'Git Hub | Lap Tools Web',
            'PageDescription' => 'Discover Git Hub, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function Netlify()
    {
        return view('Dev.FrontEnd.Netlify', [
            'PageTitle' => 'Netlify | Lap Tools Web',
            'PageDescription' => 'Discover Netlify, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function Vercel()
    {
        return view('Dev.FrontEnd.Vercel', [
            'PageTitle' => 'Vercel | Lap Tools Web',
            'PageDescription' => 'Discover Vercel, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function freeCodeCamp()
    {
        return view('Dev.FrontEnd.freeCodeCamp', [
            'PageTitle' => 'Free Code Camp | Lap Tools Web',
            'PageDescription' => 'Discover Free Code Camp, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function JSFiddle()
    {
        return view('Dev.FrontEnd.JSFiddle', [
            'PageTitle' => 'JS Fiddle | Lap Tools Web',
            'PageDescription' => 'Discover JS Fiddle, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function UniverseWebsiteBuilder()
    {
        return view('Dev.FrontEnd.UniverseWebsiteBuilder', [
            'PageTitle' => 'Universe Website Builder | Lap Tools Web',
            'PageDescription' => 'Discover Universe Website Builder, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function MagicUI()
    {
        return view('Dev.FrontEnd.MagicUI', [
            'PageTitle' => 'Magic UI | Lap Tools Web',
            'PageDescription' => 'Discover Magic UI, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function Bootstrap()
    {
        return view('Dev.FrontEnd.Bootstrap', [
            'PageTitle' => 'Bootstrap | Lap Tools Web',
            'PageDescription' => 'Discover Bootstrap, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function Tailwind()
    {
        return view('Dev.FrontEnd.Tailwind', [
            'PageTitle' => 'Tailwind | Lap Tools Web',
            'PageDescription' => 'Discover Tailwind, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function Scrimba()
    {
        return view('Dev.FrontEnd.Scrimba', [
            'PageTitle' => 'Scrimba | Lap Tools Web',
            'PageDescription' => 'Discover Scrimba, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function OnePageLove()
    {
        return view('Dev.FrontEnd.OnePageLove', [
            'PageTitle' => 'One Page Love | Lap Tools Web',
            'PageDescription' => 'Discover One Page Love, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function LapaNinja()
    {
        return view('Dev.FrontEnd.LapaNinja', [
            'PageTitle' => 'Lapa Ninja | Lap Tools Web',
            'PageDescription' => 'Discover Lapa Ninja, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function ResponsivelyApp()
    {
        return view('Dev.FrontEnd.ResponsivelyApp', [
            'PageTitle' => 'Responsively App | Lap Tools Web',
            'PageDescription' => 'Discover Responsively App, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function Figma()
    {
        return view('Dev.FrontEnd.Figma', [
            'PageTitle' => 'Figma | Lap Tools Web',
            'PageDescription' => 'Discover Figma, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function PageSpeedInsights()
    {
        return view('Dev.FrontEnd.PageSpeedInsights', [
            'PageTitle' => 'Page Speed Insights | Lap Tools Web',
            'PageDescription' => 'Discover Page Speed Insights, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    public function DaisyUI()
    {
        return view('Dev.FrontEnd.DaisyUI', [
            'PageTitle' => 'Daisy UI | Lap Tools Web',
            'PageDescription' => 'Discover Daisy UI, a curated resource for front-end web development on Lap Tools Web.'
        ]);
    }
    // Front End Routes End Here

    // Back End Routes Start Here
    public function BackEnd()
    {
        return view('Dev.BackEnd.BackEnd', [
            'PageTitle' => 'Back End | Lap Tools Web',
            'PageDescription' => 'Discover Back End, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function DrawIo()
    {
        return view('Dev.BackEnd.DrawIo', [
            'PageTitle' => 'Draw Io | Lap Tools Web',
            'PageDescription' => 'Discover Draw Io, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Insomnia()
    {
        return view('Dev.BackEnd.Insomnia', [
            'PageTitle' => 'Insomnia | Lap Tools Web',
            'PageDescription' => 'Discover Insomnia, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function dbdiagramIo()
    {
        return view('Dev.BackEnd.dbdiagramIo', [
            'PageTitle' => 'Dbdiagram Io | Lap Tools Web',
            'PageDescription' => 'Discover Dbdiagram Io, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function DevDocsIo()
    {
        return view('Dev.BackEnd.DevDocsIo', [
            'PageTitle' => 'Dev Docs Io | Lap Tools Web',
            'PageDescription' => 'Discover Dev Docs Io, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Hoppscotch()
    {
        return view('Dev.BackEnd.Hoppscotch', [
            'PageTitle' => 'Hoppscotch | Lap Tools Web',
            'PageDescription' => 'Discover Hoppscotch, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Postman()
    {
        return view('Dev.BackEnd.Postman', [
            'PageTitle' => 'Postman | Lap Tools Web',
            'PageDescription' => 'Discover Postman, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function JSONPlaceholder()
    {
        return view('Dev.BackEnd.JSONPlaceholder', [
            'PageTitle' => 'JSON Placeholder | Lap Tools Web',
            'PageDescription' => 'Discover JSON Placeholder, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Regex101()
    {
        return view('Dev.BackEnd.Regex101', [
            'PageTitle' => 'Regex101 | Lap Tools Web',
            'PageDescription' => 'Discover Regex101, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function ByteByteGo()
    {
        return view('Dev.BackEnd.ByteByteGo', [
            'PageTitle' => 'Byte Byte Go | Lap Tools Web',
            'PageDescription' => 'Discover Byte Byte Go, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function EraserIo()
    {
        return view('Dev.BackEnd.EraserIo', [
            'PageTitle' => 'Eraser Io | Lap Tools Web',
            'PageDescription' => 'Discover Eraser Io, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Excalidraw()
    {
        return view('Dev.BackEnd.Excalidraw', [
            'PageTitle' => 'Excalidraw | Lap Tools Web',
            'PageDescription' => 'Discover Excalidraw, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Firebase()
    {
        return view('Dev.BackEnd.Firebase', [
            'PageTitle' => 'Firebase | Lap Tools Web',
            'PageDescription' => 'Discover Firebase, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Supabase()
    {
        return view('Dev.BackEnd.Supabase', [
            'PageTitle' => 'Supabase | Lap Tools Web',
            'PageDescription' => 'Discover Supabase, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Railway()
    {
        return view('Dev.BackEnd.Railway', [
            'PageTitle' => 'Railway | Lap Tools Web',
            'PageDescription' => 'Discover Railway, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Render()
    {
        return view('Dev.BackEnd.Render', [
            'PageTitle' => 'Render | Lap Tools Web',
            'PageDescription' => 'Discover Render, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function OWASP()
    {
        return view('Dev.BackEnd.OWASP', [
            'PageTitle' => 'OWASP | Lap Tools Web',
            'PageDescription' => 'Discover OWASP, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function K6Io()
    {
        return view('Dev.BackEnd.K6Io', [
            'PageTitle' => 'K6 Io | Lap Tools Web',
            'PageDescription' => 'Discover K6 Io, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function StackOverflow()
    {
        return view('Dev.BackEnd.StackOverflow', [
            'PageTitle' => 'Stack Overflow | Lap Tools Web',
            'PageDescription' => 'Discover Stack Overflow, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function GeeksforGeeks()
    {
        return view('Dev.BackEnd.GeeksforGeeks', [
            'PageTitle' => 'Geeksfor Geeks | Lap Tools Web',
            'PageDescription' => 'Discover Geeksfor Geeks, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Swagger()
    {
        return view('Dev.BackEnd.Swagger', [
            'PageTitle' => 'Swagger | Lap Tools Web',
            'PageDescription' => 'Discover Swagger, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function MongoDB()
    {
        return view('Dev.BackEnd.MongoDB', [
            'PageTitle' => 'Mongo DB | Lap Tools Web',
            'PageDescription' => 'Discover Mongo DB, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function MySQL()
    {
        return view('Dev.BackEnd.MySQL', [
            'PageTitle' => 'My SQL | Lap Tools Web',
            'PageDescription' => 'Discover My SQL, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function PostgreSQL()
    {
        return view('Dev.BackEnd.PostgreSQL', [
            'PageTitle' => 'Postgre SQL | Lap Tools Web',
            'PageDescription' => 'Discover Postgre SQL, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Redis()
    {
        return view('Dev.BackEnd.Redis', [
            'PageTitle' => 'Redis | Lap Tools Web',
            'PageDescription' => 'Discover Redis, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Heroku()
    {
        return view('Dev.BackEnd.Heroku', [
            'PageTitle' => 'Heroku | Lap Tools Web',
            'PageDescription' => 'Discover Heroku, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function DigitalOcean()
    {
        return view('Dev.BackEnd.DigitalOcean', [
            'PageTitle' => 'Digital Ocean | Lap Tools Web',
            'PageDescription' => 'Discover Digital Ocean, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function JWTIo()
    {
        return view('Dev.BackEnd.JWTIo', [
            'PageTitle' => 'JWT Io | Lap Tools Web',
            'PageDescription' => 'Discover JWT Io, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function HaveIBeenPwned()
    {
        return view('Dev.BackEnd.HaveIBeenPwned', [
            'PageTitle' => 'Have I Been Pwned | Lap Tools Web',
            'PageDescription' => 'Discover Have I Been Pwned, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Docker()
    {
        return view('Dev.BackEnd.Docker', [
            'PageTitle' => 'Docker | Lap Tools Web',
            'PageDescription' => 'Discover Docker, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Cloudinary()
    {
        return view('Dev.BackEnd.Cloudinary', [
            'PageTitle' => 'Cloudinary | Lap Tools Web',
            'PageDescription' => 'Discover Cloudinary, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    public function Spatie()
    {
        return view('Dev.BackEnd.Spatie', [
            'PageTitle' => 'Spatie | Lap Tools Web',
            'PageDescription' => 'Discover Spatie, a curated resource for back-end web development on Lap Tools Web.'
        ]);
    }
    // Back End Routes End Here
    public function AnimationAnd3D()
    {
        return view('AnimationAnd3D.AnimationAnd3D', [
            'PageTitle' => 'Animation And3 D | Lap Tools Web',
            'PageDescription' => 'Discover Animation And3 D, a curated resource for digital tools and online resources on Lap Tools Web.'
        ]);
    }
    public function Spline()
    {
        return view('AnimationAnd3D.Spline', [
            'PageTitle' => 'Spline | Lap Tools Web',
            'PageDescription' => 'Discover Spline, a curated resource for digital tools and online resources on Lap Tools Web.'
        ]);
    }
    // AnimationAnd3D Start Here
    public function BlenderStudio()
    {
        return view('AnimationAnd3D.BlenderStudio', [
            'PageTitle' => 'Blender Studio | Lap Tools Web',
            'PageDescription' => 'Discover Blender Studio, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function CGCookie()
    {
        return view('AnimationAnd3D.CGCookie', [
            'PageTitle' => 'CG Cookie | Lap Tools Web',
            'PageDescription' => 'Discover CG Cookie, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function Blender()
    {
        return view('AnimationAnd3D.Blender', [
            'PageTitle' => 'Blender | Lap Tools Web',
            'PageDescription' => 'Discover Blender, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function AutodeskMaya()
    {
        return view('AnimationAnd3D.AutodeskMaya', [
            'PageTitle' => 'Autodesk Maya | Lap Tools Web',
            'PageDescription' => 'Discover Autodesk Maya, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function Autodesk3dsMax()
    {
        return view('AnimationAnd3D.Autodesk3dsMax', [
            'PageTitle' => 'Autodesk3ds Max | Lap Tools Web',
            'PageDescription' => 'Discover Autodesk3ds Max, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function Houdini()
    {
        return view('AnimationAnd3D.Houdini', [
            'PageTitle' => 'Houdini | Lap Tools Web',
            'PageDescription' => 'Discover Houdini, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function ZBrush()
    {
        return view('ZBrush', [
            'PageTitle' => 'Z Brush | Lap Tools Web',
            'PageDescription' => 'Discover Z Brush, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function AnimSchool()
    {
        return view('AnimSchool', [
            'PageTitle' => 'Anim School | Lap Tools Web',
            'PageDescription' => 'Discover Anim School, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function RenderHub()
    {
        return view('RenderHub', [
            'PageTitle' => 'Render Hub | Lap Tools Web',
            'PageDescription' => 'Discover Render Hub, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function Free3D()
    {
        return view('Free3D', [
            'PageTitle' => 'Free3 D | Lap Tools Web',
            'PageDescription' => 'Discover Free3 D, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function BlendSwap()
    {
        return view('BlendSwap', [
            'PageTitle' => 'Blend Swap | Lap Tools Web',
            'PageDescription' => 'Discover Blend Swap, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function TexturesCom()
    {
        return view('TexturesCom', [
            'PageTitle' => 'Textures Com | Lap Tools Web',
            'PageDescription' => 'Discover Textures Com, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function TexturesMe3D()
    {
        return view('TexturesMe3D', [
            'PageTitle' => 'Textures Me3 D | Lap Tools Web',
            'PageDescription' => 'Discover Textures Me3 D, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function Reallusion()
    {
        return view('Reallusion', [
            'PageTitle' => 'Reallusion | Lap Tools Web',
            'PageDescription' => 'Discover Reallusion, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function QuixelMegascans()
    {
        return view('QuixelMegascans', [
            'PageTitle' => 'Quixel Megascans | Lap Tools Web',
            'PageDescription' => 'Discover Quixel Megascans, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function Daz3D()
    {
        return view('Daz3D', [
            'PageTitle' => 'Daz3 D | Lap Tools Web',
            'PageDescription' => 'Discover Daz3 D, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function ActionVFX()
    {
        return view('ActionVFX', [
            'PageTitle' => 'Action VFX | Lap Tools Web',
            'PageDescription' => 'Discover Action VFX, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function MetaHumanCreator()
    {
        return view('MetaHumanCreator', [
            'PageTitle' => 'Meta Human Creator | Lap Tools Web',
            'PageDescription' => 'Discover Meta Human Creator, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function PolyHaven()
    {
        return view('PolyHaven', [
            'PageTitle' => 'Poly Haven | Lap Tools Web',
            'PageDescription' => 'Discover Poly Haven, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function ambientCG()
    {
        return view('ambientCG', [
            'PageTitle' => 'Ambient CG | Lap Tools Web',
            'PageDescription' => 'Discover Ambient CG, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function ProductionCrate()
    {
        return view('ProductionCrate', [
            'PageTitle' => 'Production Crate | Lap Tools Web',
            'PageDescription' => 'Discover Production Crate, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function VideoCopilot()
    {
        return view('VideoCopilot', [
            'PageTitle' => 'Video Copilot | Lap Tools Web',
            'PageDescription' => 'Discover Video Copilot, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function ChaosVRay()
    {
        return view('ChaosVRay', [
            'PageTitle' => 'Chaos V Ray | Lap Tools Web',
            'PageDescription' => 'Discover Chaos V Ray, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function CoronaRenderer()
    {
        return view('CoronaRenderer', [
            'PageTitle' => 'Corona Renderer | Lap Tools Web',
            'PageDescription' => 'Discover Corona Renderer, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function OctaneRender()
    {
        return view('OctaneRender', [
            'PageTitle' => 'Octane Render | Lap Tools Web',
            'PageDescription' => 'Discover Octane Render, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function Redshift()
    {
        return view('Redshift', [
            'PageTitle' => 'Redshift | Lap Tools Web',
            'PageDescription' => 'Discover Redshift, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function SchoolofMotion()
    {
        return view('SchoolofMotion', [
            'PageTitle' => 'Schoolof Motion | Lap Tools Web',
            'PageDescription' => 'Discover Schoolof Motion, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function MotionDesignSchool()
    {
        return view('MotionDesignSchool', [
            'PageTitle' => 'Motion Design School | Lap Tools Web',
            'PageDescription' => 'Discover Motion Design School, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function Kaiber()
    {
        return view('Kaiber', [
            'PageTitle' => 'Kaiber | Lap Tools Web',
            'PageDescription' => 'Discover Kaiber, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }
    public function MeshyAI()
    {
        return view('MeshyAI', [
            'PageTitle' => 'Meshy AI | Lap Tools Web',
            'PageDescription' => 'Discover Meshy AI, a curated resource for 3D animation and motion design on Lap Tools Web.'
        ]);
    }

    // AnimationAnd3D End Here
    //   Data Science Start Here
    public function DataScience()
    {
        return view('Dev.Data.DataScience', [
            'PageTitle' => 'Data Science | Lap Tools Web',
            'PageDescription' => 'Discover Data Science, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function DrivenData()
    {
        return view('Dev.Data.DrivenData', [
            'PageTitle' => 'Driven Data | Lap Tools Web',
            'PageDescription' => 'Discover Driven Data, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function Dataquest()
    {
        return view('Dev.Data.Dataquest', [
            'PageTitle' => 'Dataquest | Lap Tools Web',
            'PageDescription' => 'Discover Dataquest, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function Deepnote()
    {
        return view('Dev.Data.Deepnote', [
            'PageTitle' => 'Deepnote | Lap Tools Web',
            'PageDescription' => 'Discover Deepnote, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function DataCamp()
    {
        return view('Dev.Data.DataCamp', [
            'PageTitle' => 'Data Camp | Lap Tools Web',
            'PageDescription' => 'Discover Data Camp, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function Coursera()
    {
        return view('Dev.Data.Coursera', [
            'PageTitle' => 'Coursera | Lap Tools Web',
            'PageDescription' => 'Discover Coursera, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function KDnuggets()
    {
        return view('Dev.Data.KDnuggets', [
            'PageTitle' => 'K Dnuggets | Lap Tools Web',
            'PageDescription' => 'Discover K Dnuggets, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function CrossValidated()
    {
        return view('Dev.Data.CrossValidated', [
            'PageTitle' => 'Cross Validated | Lap Tools Web',
            'PageDescription' => 'Discover Cross Validated, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function JupyterNotebook()
    {
        return view('Dev.Data.JupyterNotebook', [
            'PageTitle' => 'Jupyter Notebook | Lap Tools Web',
            'PageDescription' => 'Discover Jupyter Notebook, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function Zindi()
    {
        return view('Dev.Data.Zindi', [
            'PageTitle' => 'Zindi | Lap Tools Web',
            'PageDescription' => 'Discover Zindi, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function AIcrowd()
    {
        return view('Dev.Data.AIcrowd', [
            'PageTitle' => 'A Icrowd | Lap Tools Web',
            'PageDescription' => 'Discover A Icrowd, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function GoogleDatasetSearch()
    {
        return view('Dev.Data.GoogleDatasetSearch', [
            'PageTitle' => 'Google Dataset Search | Lap Tools Web',
            'PageDescription' => 'Discover Google Dataset Search, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function OurWorldinData()
    {
        return view('Dev.Data.OurWorldinData', [
            'PageTitle' => 'Our Worldin Data | Lap Tools Web',
            'PageDescription' => 'Discover Our Worldin Data, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function DistillPub()
    {
        return view('Dev.Data.DistillPub', [
            'PageTitle' => 'Distill Pub | Lap Tools Web',
            'PageDescription' => 'Discover Distill Pub, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function edX()
    {
        return view('Dev.Data.edX', [
            'PageTitle' => 'Ed X | Lap Tools Web',
            'PageDescription' => 'Discover Ed X, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function DataGov()
    {
        return view('Dev.Data.DataGov', [
            'PageTitle' => 'Data Gov | Lap Tools Web',
            'PageDescription' => 'Discover Data Gov, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function PandasDocumentation()
    {
        return view('Dev.Data.PandasDocumentation', [
            'PageTitle' => 'Pandas Documentation | Lap Tools Web',
            'PageDescription' => 'Discover Pandas Documentation, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function NumPyDocumentation()
    {
        return view('Dev.Data.NumPyDocumentation', [
            'PageTitle' => 'Num Py Documentation | Lap Tools Web',
            'PageDescription' => 'Discover Num Py Documentation, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function LeetCode()
    {
        return view('Dev.Data.LeetCode', [
            'PageTitle' => 'Leet Code | Lap Tools Web',
            'PageDescription' => 'Discover Leet Code, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function HackerRank()
    {
        return view('Dev.Data.HackerRank', [
            'PageTitle' => 'Hacker Rank | Lap Tools Web',
            'PageDescription' => 'Discover Hacker Rank, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function PowerBI()
    {
        return view('Dev.Data.PowerBI', [
            'PageTitle' => 'Power BI | Lap Tools Web',
            'PageDescription' => 'Discover Power BI, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function OpenML()
    {
        return view('Dev.Data.OpenML', [
            'PageTitle' => 'Open ML | Lap Tools Web',
            'PageDescription' => 'Discover Open ML, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function DeepLearningAI()
    {
        return view('Dev.Data.DeepLearningAI', [
            'PageTitle' => 'Deep Learning AI | Lap Tools Web',
            'PageDescription' => 'Discover Deep Learning AI, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function Statology()
    {
        return view('Dev.Data.Statology', [
            'PageTitle' => 'Statology | Lap Tools Web',
            'PageDescription' => 'Discover Statology, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function Zenodo()
    {
        return view('Dev.Data.Zenodo', [
            'PageTitle' => 'Zenodo | Lap Tools Web',
            'PageDescription' => 'Discover Zenodo, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function Dask()
    {
        return view('Dev.Data.Dask', [
            'PageTitle' => 'Dask | Lap Tools Web',
            'PageDescription' => 'Discover Dask, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    public function WorldBankOpenData()
    {
        return view('Dev.Data.WorldBankOpenData', [
            'PageTitle' => 'World Bank Open Data | Lap Tools Web',
            'PageDescription' => 'Discover World Bank Open Data, a curated resource for data science and analytics on Lap Tools Web.'
        ]);
    }
    // UI/UX Design Start Here
    public function UIDesign()
    {
        return view('Dev.UI.UI&UX', [
            'PageTitle' => 'UI Design | Lap Tools Web',
            'PageDescription' => 'Discover UI Design, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function Storyset()
    {
        return view('Dev.UI.Storyset', [
            'PageTitle' => 'Storyset | Lap Tools Web',
            'PageDescription' => 'Discover Storyset, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }
    public function UXPin()
    {
        return view('Dev.UI.UXPin', [
            'PageTitle' => 'UX Pin | Lap Tools Web',
            'PageDescription' => 'Discover UX Pin, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function Iconify()
    {
        return view('Dev.UI.Iconify', [
            'PageTitle' => 'Iconify | Lap Tools Web',
            'PageDescription' => 'Discover Iconify, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function FigmaCommunity()
    {
        return view('Dev.UI.FigmaCommunity', [
            'PageTitle' => 'Figma Community | Lap Tools Web',
            'PageDescription' => 'Discover Figma Community, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function LandBook()
    {
        return view('Dev.UI.LandBook', [
            'PageTitle' => 'Land Book | Lap Tools Web',
            'PageDescription' => 'Discover Land Book, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function PageFlows()
    {
        return view('Dev.UI.PageFlows', [
            'PageTitle' => 'Page Flows | Lap Tools Web',
            'PageDescription' => 'Discover Page Flows, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function SaaSframe()
    {
        return view('Dev.UI.SaaSframe', [
            'PageTitle' => 'Saa Sframe | Lap Tools Web',
            'PageDescription' => 'Discover Saa Sframe, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function RealtimeColors()
    {
        return view('Dev.UI.RealtimeColors', [
            'PageTitle' => 'Realtime Colors | Lap Tools Web',
            'PageDescription' => 'Discover Realtime Colors, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function Typewolf()
    {
        return view('Dev.UI.Typewolf', [
            'PageTitle' => 'Typewolf | Lap Tools Web',
            'PageDescription' => 'Discover Typewolf, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function FontShare()
    {
        return view('Dev.UI.FontShare', [
            'PageTitle' => 'Font Share | Lap Tools Web',
            'PageDescription' => 'Discover Font Share, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function Whimsical()
    {
        return view('Dev.UI.Whimsical', [
            'PageTitle' => 'Whimsical | Lap Tools Web',
            'PageDescription' => 'Discover Whimsical, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function Balsamiq()
    {
        return view('Dev.UI.Balsamiq', [
            'PageTitle' => 'Balsamiq | Lap Tools Web',
            'PageDescription' => 'Discover Balsamiq, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function LawsofUX()
    {
        return view('Dev.UI.LawsofUX', [
            'PageTitle' => 'Lawsof UX | Lap Tools Web',
            'PageDescription' => 'Discover Lawsof UX, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function NielsenNormanGroup()
    {
        return view('Dev.UI.NielsenNormanGroup', [
            'PageTitle' => 'Nielsen Norman Group | Lap Tools Web',
            'PageDescription' => 'Discover Nielsen Norman Group, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function UXArchive()
    {
        return view('Dev.UI.UXArchive', [
            'PageTitle' => 'UX Archive | Lap Tools Web',
            'PageDescription' => 'Discover UX Archive, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function GrowthDesign()
    {
        return view('Dev.UI.GrowthDesign', [
            'PageTitle' => 'Growth Design | Lap Tools Web',
            'PageDescription' => 'Discover Growth Design, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function Sketch()
    {
        return view('Dev.UI.Sketch', [
            'PageTitle' => 'Sketch | Lap Tools Web',
            'PageDescription' => 'Discover Sketch, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function AxureRP()
    {
        return view('Dev.UI.AxureRP', [
            'PageTitle' => 'Axure RP | Lap Tools Web',
            'PageDescription' => 'Discover Axure RP, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function AdobeXD()
    {
        return view('Dev.UI.AdobeXD', [
            'PageTitle' => 'Adobe XD | Lap Tools Web',
            'PageDescription' => 'Discover Adobe XD, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    public function UI8()
    {
        return view('Dev.UI.UI8', [
            'PageTitle' => 'UI8 | Lap Tools Web',
            'PageDescription' => 'Discover UI8, a curated resource for UI/UX design on Lap Tools Web.'
        ]);
    }

    // UI/UX Design End Here
    //   AI Development Start Here
    public function HuggingFace()
    {
        return view('Dev.AI.HuggingFace', [
            'PageTitle' => 'Hugging Face | Lap Tools Web',
            'PageDescription' => 'Discover Hugging Face, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function Kaggle()
    {
        return view('Dev.AI.Kaggle', [
            'PageTitle' => 'Kaggle | Lap Tools Web',
            'PageDescription' => 'Discover Kaggle, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function Cohere()
    {
        return view('Dev.AI.Cohere', [
            'PageTitle' => 'Cohere | Lap Tools Web',
            'PageDescription' => 'Discover Cohere, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function OpenAIPlatform()
    {
        return view('Dev.AI.OpenAIPlatform', [
            'PageTitle' => 'Open AI Platform | Lap Tools Web',
            'PageDescription' => 'Discover Open AI Platform, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function GoogleAIStudio()
    {
        return view('Dev.AI.GoogleAIStudio', [
            'PageTitle' => 'Google AI Studio | Lap Tools Web',
            'PageDescription' => 'Discover Google AI Studio, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function VertexAI()
    {
        return view('Dev.AI.VertexAI', [
            'PageTitle' => 'Vertex AI | Lap Tools Web',
            'PageDescription' => 'Discover Vertex AI, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function AnthropicConsole()
    {
        return view('Dev.AI.AnthropicConsole', [
            'PageTitle' => 'Anthropic Console | Lap Tools Web',
            'PageDescription' => 'Discover Anthropic Console, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function SiliconFlow()
    {
        return view('Dev.AI.SiliconFlow', [
            'PageTitle' => 'Silicon Flow | Lap Tools Web',
            'PageDescription' => 'Discover Silicon Flow, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function Replicate()
    {
        return view('Dev.AI.Replicate', [
            'PageTitle' => 'Replicate | Lap Tools Web',
            'PageDescription' => 'Discover Replicate, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function GoogleColab()
    {
        return view('Dev.AI.GoogleColab', [
            'PageTitle' => 'Google Colab | Lap Tools Web',
            'PageDescription' => 'Discover Google Colab, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function PaperspaceGradient()
    {
        return view('Dev.AI.PaperspaceGradient', [
            'PageTitle' => 'Paperspace Gradient | Lap Tools Web',
            'PageDescription' => 'Discover Paperspace Gradient, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function Cursor()
    {
        return view('Dev.AI.Cursor', [
            'PageTitle' => 'Cursor | Lap Tools Web',
            'PageDescription' => 'Discover Cursor, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function BoltNew()
    {
        return view('Dev.AI.BoltNew', [
            'PageTitle' => 'Bolt New | Lap Tools Web',
            'PageDescription' => 'Discover Bolt New, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function Pinecone()
    {
        return view('Dev.AI.Pinecone', [
            'PageTitle' => 'Pinecone | Lap Tools Web',
            'PageDescription' => 'Discover Pinecone, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function LangSmith()
    {
        return view('Dev.AI.LangSmith', [
            'PageTitle' => 'Lang Smith | Lap Tools Web',
            'PageDescription' => 'Discover Lang Smith, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function GroqCloud()
    {
        return view('Dev.AI.GroqCloud', [
            'PageTitle' => 'Groq Cloud | Lap Tools Web',
            'PageDescription' => 'Discover Groq Cloud, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function TogetherAI()
    {
        return view('Dev.AI.TogetherAI', [
            'PageTitle' => 'Together AI | Lap Tools Web',
            'PageDescription' => 'Discover Together AI, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function MistralAI()
    {
        return view('Dev.AI.MistralAI', [
            'PageTitle' => 'Mistral AI | Lap Tools Web',
            'PageDescription' => 'Discover Mistral AI, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function Ollama()
    {
        return view('Dev.AI.Ollama', [
            'PageTitle' => 'Ollama | Lap Tools Web',
            'PageDescription' => 'Discover Ollama, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function LMStudio()
    {
        return view('Dev.AI.LMStudio', [
            'PageTitle' => 'LM Studio | Lap Tools Web',
            'PageDescription' => 'Discover LM Studio, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function ModelScope()
    {
        return view('Dev.AI.ModelScope', [
            'PageTitle' => 'Model Scope | Lap Tools Web',
            'PageDescription' => 'Discover Model Scope, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function LlamaIndex()
    {
        return view('Dev.AI.LlamaIndex', [
            'PageTitle' => 'Llama Index | Lap Tools Web',
            'PageDescription' => 'Discover Llama Index, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function Haystack()
    {
        return view('Dev.AI.Haystack', [
            'PageTitle' => 'Haystack | Lap Tools Web',
            'PageDescription' => 'Discover Haystack, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function PyTorch()
    {
        return view('Dev.AI.PyTorch', [
            'PageTitle' => 'Py Torch | Lap Tools Web',
            'PageDescription' => 'Discover Py Torch, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function TensorFlow()
    {
        return view('Dev.AI.TensorFlow', [
            'PageTitle' => 'Tensor Flow | Lap Tools Web',
            'PageDescription' => 'Discover Tensor Flow, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function Keras()
    {
        return view('Dev.AI.Keras', [
            'PageTitle' => 'Keras | Lap Tools Web',
            'PageDescription' => 'Discover Keras, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function PaperswithCode()
    {
        return view('Dev.AI.PaperswithCode', [
            'PageTitle' => 'Paperswith Code | Lap Tools Web',
            'PageDescription' => 'Discover Paperswith Code, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function UCIMachineLearningRepository()
    {
        return view('Dev.AI.UCIMachineLearningRepository', [
            'PageTitle' => 'UCI Machine Learning Repository | Lap Tools Web',
            'PageDescription' => 'Discover UCI Machine Learning Repository, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function arXivAIPapers()
    {
        return view('Dev.AI.arXivAIPapers', [
            'PageTitle' => 'Ar Xiv AI Papers | Lap Tools Web',
            'PageDescription' => 'Discover Ar Xiv AI Papers, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function TowardsDataScience()
    {
        return view('Dev.AI.TowardsDataScience', [
            'PageTitle' => 'Towards Data Science | Lap Tools Web',
            'PageDescription' => 'Discover Towards Data Science, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function AnalyticsVidhya()
    {
        return view('Dev.AI.AnalyticsVidhya', [
            'PageTitle' => 'Analytics Vidhya | Lap Tools Web',
            'PageDescription' => 'Discover Analytics Vidhya, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function claude()
    {
        return view('Dev.AI.claude', [
            'PageTitle' => 'Claude | Lap Tools Web',
            'PageDescription' => 'Discover Claude, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function CrewAI()
    {
        return view('Dev.AI.CrewAI', [
            'PageTitle' => 'Crew AI | Lap Tools Web',
            'PageDescription' => 'Discover Crew AI, a curated resource for AI development on Lap Tools Web.'
        ]);
    }
    public function copilott()
    {
        return view('Dev.AI.copilot', [
            'PageTitle' => 'Copilott | Lap Tools Web',
            'PageDescription' => 'Discover Copilott, a curated resource for AI development on Lap Tools Web.'
        ]);
    }

    // Ai Development End Here

    // cyberSecurity Start Here
    public function cyberSecurity()
    {
        return view('Dev.cyberSecurity.cyberSecurity', [
            'PageTitle' => 'Cyber Security | Lap Tools Web',
            'PageDescription' => 'Discover Cyber Security, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function TryHackMe()
    {
        return view('Dev.cyberSecurity.TryHackMe', [
            'PageTitle' => 'Try Hack Me | Lap Tools Web',
            'PageDescription' => 'Discover Try Hack Me, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }
    public function MITREATTCK()
    {
        return view('Dev.cyberSecurity.MITREATTCK', [
            'PageTitle' => 'MITREATTCK | Lap Tools Web',
            'PageDescription' => 'Discover MITREATTCK, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function HackTheBox()
    {
        return view('Dev.cyberSecurity.HackTheBox', [
            'PageTitle' => 'Hack The Box | Lap Tools Web',
            'PageDescription' => 'Discover Hack The Box, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function PortSwiggerWebSecurityAcademy()
    {
        return view('Dev.cyberSecurity.PortSwiggerWebSecurityAcademy', [
            'PageTitle' => 'Port Swigger Web Security Academy | Lap Tools Web',
            'PageDescription' => 'Discover Port Swigger Web Security Academy, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function OverTheWire()
    {
        return view('Dev.cyberSecurity.OverTheWire', [
            'PageTitle' => 'Over The Wire | Lap Tools Web',
            'PageDescription' => 'Discover Over The Wire, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function picoCTF()
    {
        return view('Dev.cyberSecurity.picoCTF', [
            'PageTitle' => 'Pico CTF | Lap Tools Web',
            'PageDescription' => 'Discover Pico CTF, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function CTFtime()
    {
        return view('Dev.cyberSecurity.CTFtime', [
            'PageTitle' => 'CT Ftime | Lap Tools Web',
            'PageDescription' => 'Discover CT Ftime, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function HackerOne()
    {
        return view('Dev.cyberSecurity.HackerOne', [
            'PageTitle' => 'Hacker One | Lap Tools Web',
            'PageDescription' => 'Discover Hacker One, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function Bugcrowd()
    {
        return view('Dev.cyberSecurity.Bugcrowd', [
            'PageTitle' => 'Bugcrowd | Lap Tools Web',
            'PageDescription' => 'Discover Bugcrowd, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function TheHackerNews()
    {
        return view('Dev.cyberSecurity.TheHackerNews', [
            'PageTitle' => 'The Hacker News | Lap Tools Web',
            'PageDescription' => 'Discover The Hacker News, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function CVEMitre()
    {
        return view('Dev.cyberSecurity.CVEMitre', [
            'PageTitle' => 'CVE Mitre | Lap Tools Web',
            'PageDescription' => 'Discover CVE Mitre, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function BleepingComputer()
    {
        return view('Dev.cyberSecurity.BleepingComputer', [
            'PageTitle' => 'Bleeping Computer | Lap Tools Web',
            'PageDescription' => 'Discover Bleeping Computer, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function CyberDefenders()
    {
        return view('Dev.cyberSecurity.CyberDefenders', [
            'PageTitle' => 'Cyber Defenders | Lap Tools Web',
            'PageDescription' => 'Discover Cyber Defenders, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function LetsDefend()
    {
        return view('Dev.cyberSecurity.LetsDefend', [
            'PageTitle' => 'Lets Defend | Lap Tools Web',
            'PageDescription' => 'Discover Lets Defend, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function VulnHub()
    {
        return view('Dev.cyberSecurity.VulnHub', [
            'PageTitle' => 'Vuln Hub | Lap Tools Web',
            'PageDescription' => 'Discover Vuln Hub, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function OffSecLearningLibrary()
    {
        return view('Dev.cyberSecurity.OffSecLearningLibrary', [
            'PageTitle' => 'Off Sec Learning Library | Lap Tools Web',
            'PageDescription' => 'Discover Off Sec Learning Library, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function Cybrary()
    {
        return view('Dev.cyberSecurity.Cybrary', [
            'PageTitle' => 'Cybrary | Lap Tools Web',
            'PageDescription' => 'Discover Cybrary, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function AntisyphonTraining()
    {
        return view('Dev.cyberSecurity.AntisyphonTraining', [
            'PageTitle' => 'Antisyphon Training | Lap Tools Web',
            'PageDescription' => 'Discover Antisyphon Training, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function DarkReading()
    {
        return view('Dev.cyberSecurity.DarkReading', [
            'PageTitle' => 'Dark Reading | Lap Tools Web',
            'PageDescription' => 'Discover Dark Reading, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function DanielMiessler()
    {
        return view('Dev.cyberSecurity.DanielMiessler', [
            'PageTitle' => 'Daniel Miessler | Lap Tools Web',
            'PageDescription' => 'Discover Daniel Miessler, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function NISTNVD()
    {
        return view('Dev.cyberSecurity.NISTNVD', [
            'PageTitle' => 'NISTNVD | Lap Tools Web',
            'PageDescription' => 'Discover NISTNVD, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function Intigriti()
    {
        return view('Dev.cyberSecurity.Intigriti', [
            'PageTitle' => 'Intigriti | Lap Tools Web',
            'PageDescription' => 'Discover Intigriti, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function OpenBugBounty()
    {
        return view('Dev.cyberSecurity.OpenBugBounty', [
            'PageTitle' => 'Open Bug Bounty | Lap Tools Web',
            'PageDescription' => 'Discover Open Bug Bounty, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function KrebsonSecurity()
    {
        return view('Dev.cyberSecurity.KrebsonSecurity', [
            'PageTitle' => 'Krebson Security | Lap Tools Web',
            'PageDescription' => 'Discover Krebson Security, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function OSINTFramework()
    {
        return view('Dev.cyberSecurity.OSINTFramework', [
            'PageTitle' => 'OSINT Framework | Lap Tools Web',
            'PageDescription' => 'Discover OSINT Framework, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function Shodan()
    {
        return view('Dev.cyberSecurity.Shodan', [
            'PageTitle' => 'Shodan | Lap Tools Web',
            'PageDescription' => 'Discover Shodan, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function Censys()
    {
        return view('Dev.cyberSecurity.Censys', [
            'PageTitle' => 'Censys | Lap Tools Web',
            'PageDescription' => 'Discover Censys, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function AnyRun()
    {
        return view('Dev.cyberSecurity.AnyRun', [
            'PageTitle' => 'Any Run | Lap Tools Web',
            'PageDescription' => 'Discover Any Run, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function HybridAnalysis()
    {
        return view('Dev.cyberSecurity.HybridAnalysis', [
            'PageTitle' => 'Hybrid Analysis | Lap Tools Web',
            'PageDescription' => 'Discover Hybrid Analysis, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function VirusTotal()
    {
        return view('Dev.cyberSecurity.VirusTotal', [
            'PageTitle' => 'Virus Total | Lap Tools Web',
            'PageDescription' => 'Discover Virus Total, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function ExploitDatabase()
    {
        return view('Dev.cyberSecurity.ExploitDatabase', [
            'PageTitle' => 'Exploit Database | Lap Tools Web',
            'PageDescription' => 'Discover Exploit Database, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }

    public function RootMe()
    {
        return view('Dev.cyberSecurity.RootMe', [
            'PageTitle' => 'Root Me | Lap Tools Web',
            'PageDescription' => 'Discover Root Me, a curated resource for cybersecurity on Lap Tools Web.'
        ]);
    }
    // cyberSecurity End Here

    // Developers End
    // office Start Here
    public function office()
    {
        return view('office.office', [
            'PageTitle' => 'Office | Lap Tools Web',
            'PageDescription' => 'Discover Office, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }

    public function powerpoint()
    {
        return view('office.powerpoint.powerpoint', [
            'PageTitle' => 'Powerpoint | Lap Tools Web',
            'PageDescription' => 'Discover Powerpoint, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function word()
    {
        return view('office.word.word', [
            'PageTitle' => 'Word | Lap Tools Web',
            'PageDescription' => 'Discover Word, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function WordDon()
    {
        return view('office.word.WordDon', [
            'PageTitle' => 'Word Don | Lap Tools Web',
            'PageDescription' => 'Discover Word Don, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Grammarly()
    {
        return view('office.word.Grammarly', [
            'PageTitle' => 'Grammarly | Lap Tools Web',
            'PageDescription' => 'Discover Grammarly, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function QuillBot()
    {
        return view('office.word.QuillBot', [
            'PageTitle' => 'Quill Bot | Lap Tools Web',
            'PageDescription' => 'Discover Quill Bot, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function LanguageTool()
    {
        return view('office.word.LanguageTool', [
            'PageTitle' => 'Language Tool | Lap Tools Web',
            'PageDescription' => 'Discover Language Tool, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function HemingwayEditor()
    {
        return view('office.word.HemingwayEditor', [
            'PageTitle' => 'Hemingway Editor | Lap Tools Web',
            'PageDescription' => 'Discover Hemingway Editor, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Scribbr()
    {
        return view('office.word.Scribbr', [
            'PageTitle' => 'Scribbr | Lap Tools Web',
            'PageDescription' => 'Discover Scribbr, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Mendeley()
    {
        return view('office.word.Mendeley', [
            'PageTitle' => 'Mendeley | Lap Tools Web',
            'PageDescription' => 'Discover Mendeley, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Zotero()
    {
        return view('office.word.Zotero', [
            'PageTitle' => 'Zotero | Lap Tools Web',
            'PageDescription' => 'Discover Zotero, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function CanvaDocs()
    {
        return view('office.word.CanvaDocs', [
            'PageTitle' => 'Canva Docs | Lap Tools Web',
            'PageDescription' => 'Discover Canva Docs, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function TinyWowWordTools()
    {
        return view('office.word.TinyWowWordTools', [
            'PageTitle' => 'Tiny Wow Word Tools | Lap Tools Web',
            'PageDescription' => 'Discover Tiny Wow Word Tools, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function iLovePDF()
    {
        return view('office.word.iLovePDF', [
            'PageTitle' => 'I Love PDF | Lap Tools Web',
            'PageDescription' => 'Discover I Love PDF, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function ProWritingAid()
    {
        return view('office.word.ProWritingAid', [
            'PageTitle' => 'Pro Writing Aid | Lap Tools Web',
            'PageDescription' => 'Discover Pro Writing Aid, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function DeepLWrite()
    {
        return view('office.word.DeepLWrite', [
            'PageTitle' => 'Deep L Write | Lap Tools Web',
            'PageDescription' => 'Discover Deep L Write, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Writesonic()
    {
        return view('office.word.Writesonic', [
            'PageTitle' => 'Writesonic | Lap Tools Web',
            'PageDescription' => 'Discover Writesonic, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function RefWorks()
    {
        return view('office.word.RefWorks', [
            'PageTitle' => 'Ref Works | Lap Tools Web',
            'PageDescription' => 'Discover Ref Works, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function CopyAi()
    {
        return view('office.word.CopyAi', [
            'PageTitle' => 'Copy Ai | Lap Tools Web',
            'PageDescription' => 'Discover Copy Ai, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function jasper()
    {
        return view('office.word.jasper', [
            'PageTitle' => 'Jasper | Lap Tools Web',
            'PageDescription' => 'Discover Jasper, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Rytr()
    {
        return view('office.word.Rytr', [
            'PageTitle' => 'Rytr | Lap Tools Web',
            'PageDescription' => 'Discover Rytr, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function EndNote()
    {
        return view('office.word.EndNote', [
            'PageTitle' => 'End Note | Lap Tools Web',
            'PageDescription' => 'Discover End Note, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Anyword()
    {
        return view('office.word.Anyword', [
            'PageTitle' => 'Anyword | Lap Tools Web',
            'PageDescription' => 'Discover Anyword, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Paperpile()
    {
        return view('office.word.Paperpile', [
            'PageTitle' => 'Paperpile | Lap Tools Web',
            'PageDescription' => 'Discover Paperpile, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Turnitin()
    {
        return view('office.word.Turnitin', [
            'PageTitle' => 'Turnitin | Lap Tools Web',
            'PageDescription' => 'Discover Turnitin, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Copyscape()
    {
        return view('office.word.Copyscape', [
            'PageTitle' => 'Copyscape | Lap Tools Web',
            'PageDescription' => 'Discover Copyscape, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Template()
    {
        return view('office.word.Template', [
            'PageTitle' => 'Template | Lap Tools Web',
            'PageDescription' => 'Discover Template, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Vertex42()
    {
        return view('office.word.Vertex42', [
            'PageTitle' => 'Vertex42 | Lap Tools Web',
            'PageDescription' => 'Discover Vertex42, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function PoweredTemplate()
    {
        return view('office.word.PoweredTemplate', [
            'PageTitle' => 'Powered Template | Lap Tools Web',
            'PageDescription' => 'Discover Powered Template, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function PDF24()
    {
        return view('office.word.PDF24', [
            'PageTitle' => 'PDF24 | Lap Tools Web',
            'PageDescription' => 'Discover PDF24, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function GoogleScholar()
    {
        return view('office.word.GoogleScholar', [
            'PageTitle' => 'Google Scholar | Lap Tools Web',
            'PageDescription' => 'Discover Google Scholar, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function ResearchGate()
    {
        return view('office.word.ResearchGate', [
            'PageTitle' => 'Research Gate | Lap Tools Web',
            'PageDescription' => 'Discover Research Gate, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function SemanticScholar()
    {
        return view('office.word.SemanticScholar', [
            'PageTitle' => 'Semantic Scholar | Lap Tools Web',
            'PageDescription' => 'Discover Semantic Scholar, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function PubMed()
    {
        return view('office.word.PubMed', [
            'PageTitle' => 'Pub Med | Lap Tools Web',
            'PageDescription' => 'Discover Pub Med, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function JSTOR()
    {
        return view('office.word.JSTOR', [
            'PageTitle' => 'JSTOR | Lap Tools Web',
            'PageDescription' => 'Discover JSTOR, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function TextFixer()
    {
        return view('office.word.TextFixer', [
            'PageTitle' => 'Text Fixer | Lap Tools Web',
            'PageDescription' => 'Discover Text Fixer, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function WordCounter()
    {
        return view('office.word.WordCounter', [
            'PageTitle' => 'Word Counter | Lap Tools Web',
            'PageDescription' => 'Discover Word Counter, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function characterCountOnline()
    {
        return view('office.word.characterCountOnline', [
            'PageTitle' => 'Character Count Online | Lap Tools Web',
            'PageDescription' => 'Discover Character Count Online, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function Diffchecker()
    {
        return view('office.word.Diffchecker', [
            'PageTitle' => 'Diffchecker | Lap Tools Web',
            'PageDescription' => 'Discover Diffchecker, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    public function WinMerge()
    {
        return view('office.word.WinMerge', [
            'PageTitle' => 'Win Merge | Lap Tools Web',
            'PageDescription' => 'Discover Win Merge, a curated resource for Word document creation and editing on Lap Tools Web.'
        ]);
    }
    // office End Here
    // powerpoint Start Here

    public function Slidesgo()
    {
        return view('office.powerpoint.Slidesgo', [
            'PageTitle' => 'Slidesgo | Lap Tools Web',
            'PageDescription' => 'Discover Slidesgo, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function PowerPointDon()
    {
        return view('office.powerpoint.PowerPointDon', [
            'PageTitle' => 'Power Point Don | Lap Tools Web',
            'PageDescription' => 'Discover Power Point Don, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function SlidesCarnival()
    {
        return view('office.powerpoint.SlidesCarnival', [
            'PageTitle' => 'Slides Carnival | Lap Tools Web',
            'PageDescription' => 'Discover Slides Carnival, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function PresentationGO()
    {
        return view('office.powerpoint.PresentationGO', [
            'PageTitle' => 'Presentation GO | Lap Tools Web',
            'PageDescription' => 'Discover Presentation GO, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function TheNounProject()
    {
        return view('office.powerpoint.TheNounProject', [
            'PageTitle' => 'The Noun Project | Lap Tools Web',
            'PageDescription' => 'Discover The Noun Project, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function Visme()
    {
        return view('office.powerpoint.Visme', [
            'PageTitle' => 'Visme | Lap Tools Web',
            'PageDescription' => 'Discover Visme, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function infogram()
    {
        return view('office.powerpoint.infogram', [
            'PageTitle' => 'Infogram | Lap Tools Web',
            'PageDescription' => 'Discover Infogram, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function Gamma()
    {
        return view('office.powerpoint.Gamma', [
            'PageTitle' => 'Gamma | Lap Tools Web',
            'PageDescription' => 'Discover Gamma, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function BeautifulAi()
    {
        return view('office.powerpoint.BeautifulAi', [
            'PageTitle' => 'Beautiful Ai | Lap Tools Web',
            'PageDescription' => 'Discover Beautiful Ai, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function SlideModel()
    {
        return view('office.powerpoint.SlideModel', [
            'PageTitle' => 'Slide Model | Lap Tools Web',
            'PageDescription' => 'Discover Slide Model, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function FPPT()
    {
        return view('office.powerpoint.FPPT', [
            'PageTitle' => 'FPPT | Lap Tools Web',
            'PageDescription' => 'Discover FPPT, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function Showeet()
    {
        return view('office.powerpoint.Showeet', [
            'PageTitle' => 'Showeet | Lap Tools Web',
            'PageDescription' => 'Discover Showeet, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function SlideHunter()
    {
        return view('office.powerpoint.SlideHunter', [
            'PageTitle' => 'Slide Hunter | Lap Tools Web',
            'PageDescription' => 'Discover Slide Hunter, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function Burst()
    {
        return view('office.powerpoint.Burst', [
            'PageTitle' => 'Burst | Lap Tools Web',
            'PageDescription' => 'Discover Burst, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function Venngage()
    {
        return view('office.powerpoint.Venngage', [
            'PageTitle' => 'Venngage | Lap Tools Web',
            'PageDescription' => 'Discover Venngage, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function Piktochart()
    {
        return view('office.powerpoint.Piktochart', [
            'PageTitle' => 'Piktochart | Lap Tools Web',
            'PageDescription' => 'Discover Piktochart, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function SlideGeeks()
    {
        return view('office.powerpoint.SlideGeeks', [
            'PageTitle' => 'Slide Geeks | Lap Tools Web',
            'PageDescription' => 'Discover Slide Geeks, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function TemplateMonster()
    {
        return view('office.powerpoint.TemplateMonster', [
            'PageTitle' => 'Template Monster | Lap Tools Web',
            'PageDescription' => 'Discover Template Monster, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function MicrosoftOfficeTemplates()
    {
        return view('office.powerpoint.MicrosoftOfficeTemplates', [
            'PageTitle' => 'Microsoft Office Templates | Lap Tools Web',
            'PageDescription' => 'Discover Microsoft Office Templates, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function StockSnap()
    {
        return view('office.powerpoint.StockSnap', [
            'PageTitle' => 'Stock Snap | Lap Tools Web',
            'PageDescription' => 'Discover Stock Snap, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function WPSOfficeTemplates()
    {
        return view('office.powerpoint.WPSOfficeTemplates', [
            'PageTitle' => 'WPS Office Templates | Lap Tools Web',
            'PageDescription' => 'Discover WPS Office Templates, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function SlidesMania()
    {
        return view('office.powerpoint.SlidesMania', [
            'PageTitle' => 'Slides Mania | Lap Tools Web',
            'PageDescription' => 'Discover Slides Mania, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    public function docsGoogle()
    {
        return view('office.powerpoint.docsGoogle', [
            'PageTitle' => 'Docs Google | Lap Tools Web',
            'PageDescription' => 'Discover Docs Google, a curated resource for presentation and slide design on Lap Tools Web.'
        ]);
    }
    // Excel Start Here

    public function excel()
    {
        return view('office.excel.excel', [
            'PageTitle' => 'Excel | Lap Tools Web',
            'PageDescription' => 'Discover Excel, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function ExcelDon()
    {
        return view('office.excel.ExcelDon', [
            'PageTitle' => 'Excel Don | Lap Tools Web',
            'PageDescription' => 'Discover Excel Don, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function MicrosoftExcelTraining()
    {
        return view('office.Excel.MicrosoftExcelTraining', [
            'PageTitle' => 'Microsoft Excel Training | Lap Tools Web',
            'PageDescription' => 'Discover Microsoft Excel Training, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function ExcelEasy()
    {
        return view('office.Excel.ExcelEasy', [
            'PageTitle' => 'Excel Easy | Lap Tools Web',
            'PageDescription' => 'Discover Excel Easy, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function ExcelJet()
    {
        return view('office.Excel.ExcelJet', [
            'PageTitle' => 'Excel Jet | Lap Tools Web',
            'PageDescription' => 'Discover Excel Jet, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function Spreadsheeto()
    {
        return view('office.Excel.Spreadsheeto', [
            'PageTitle' => 'Spreadsheeto | Lap Tools Web',
            'PageDescription' => 'Discover Spreadsheeto, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function MyOnlineTrainingHub()
    {
        return view('office.Excel.MyOnlineTrainingHub', [
            'PageTitle' => 'My Online Training Hub | Lap Tools Web',
            'PageDescription' => 'Discover My Online Training Hub, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function Spreadsheet123()
    {
        return view('office.Excel.Spreadsheet123', [
            'PageTitle' => 'Spreadsheet123 | Lap Tools Web',
            'PageDescription' => 'Discover Spreadsheet123, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function TemplateNet()
    {
        return view('office.Excel.TemplateNet', [
            'PageTitle' => 'Template Net | Lap Tools Web',
            'PageDescription' => 'Discover Template Net, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function CloudConvert()
    {
        return view('office.Excel.CloudConvert', [
            'PageTitle' => 'Cloud Convert | Lap Tools Web',
            'PageDescription' => 'Discover Cloud Convert, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function Datawrapper()
    {
        return view('office.Excel.Datawrapper', [
            'PageTitle' => 'Datawrapper | Lap Tools Web',
            'PageDescription' => 'Discover Datawrapper, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function Flourish()
    {
        return view('office.Excel.Flourish', [
            'PageTitle' => 'Flourish | Lap Tools Web',
            'PageDescription' => 'Discover Flourish, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function Convertio()
    {
        return view('office.Excel.Convertio', [
            'PageTitle' => 'Convertio | Lap Tools Web',
            'PageDescription' => 'Discover Convertio, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function OpenRefine()
    {
        return view('office.Excel.OpenRefine', [
            'PageTitle' => 'Open Refine | Lap Tools Web',
            'PageDescription' => 'Discover Open Refine, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function Airtable()
    {
        return view('office.Excel.Airtable', [
            'PageTitle' => 'Airtable | Lap Tools Web',
            'PageDescription' => 'Discover Airtable, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function ZohoSheet()
    {
        return view('office.Excel.ZohoSheet', [
            'PageTitle' => 'Zoho Sheet | Lap Tools Web',
            'PageDescription' => 'Discover Zoho Sheet, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function ONLYOFFICE()
    {
        return view('office.Excel.ONLYOFFICE', [
            'PageTitle' => 'ONLYOFFICE | Lap Tools Web',
            'PageDescription' => 'Discover ONLYOFFICE, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function ExcelFormulaBot()
    {
        return view('office.Excel.ExcelFormulaBot', [
            'PageTitle' => 'Excel Formula Bot | Lap Tools Web',
            'PageDescription' => 'Discover Excel Formula Bot, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function formulasHq()
    {
        return view('office.Excel.formulasHq', [
            'PageTitle' => 'Formulas Hq | Lap Tools Web',
            'PageDescription' => 'Discover Formulas Hq, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function AblebitsExcelBlog()
    {
        return view('office.Excel.AblebitsExcelBlog', [
            'PageTitle' => 'Ablebits Excel Blog | Lap Tools Web',
            'PageDescription' => 'Discover Ablebits Excel Blog, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function GPTExcel()
    {
        return view('office.Excel.GPTExcel', [
            'PageTitle' => 'GPT Excel | Lap Tools Web',
            'PageDescription' => 'Discover GPT Excel, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function AjelixAI()
    {
        return view('office.Excel.AjelixAI', [
            'PageTitle' => 'Ajelix AI | Lap Tools Web',
            'PageDescription' => 'Discover Ajelix AI, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function sheetAi()
    {
        return view('office.Excel.sheetAi', [
            'PageTitle' => 'Sheet Ai | Lap Tools Web',
            'PageDescription' => 'Discover Sheet Ai, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function Indzara()
    {
        return view('office.Excel.Indzara', [
            'PageTitle' => 'Indzara | Lap Tools Web',
            'PageDescription' => 'Discover Indzara, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function ExcelDashboardSchool()
    {
        return view('office.Excel.ExcelDashboardSchool', [
            'PageTitle' => 'Excel Dashboard School | Lap Tools Web',
            'PageDescription' => 'Discover Excel Dashboard School, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function Someka()
    {
        return view('office.Excel.Someka', [
            'PageTitle' => 'Someka | Lap Tools Web',
            'PageDescription' => 'Discover Someka, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function Eloquens()
    {
        return view('office.Excel.Eloquens', [
            'PageTitle' => 'Eloquens | Lap Tools Web',
            'PageDescription' => 'Discover Eloquens, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function QlikSense()
    {
        return view('office.Excel.QlikSense', [
            'PageTitle' => 'Qlik Sense | Lap Tools Web',
            'PageDescription' => 'Discover Qlik Sense, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function Plotly()
    {
        return view('office.Excel.Plotly', [
            'PageTitle' => 'Plotly | Lap Tools Web',
            'PageDescription' => 'Discover Plotly, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function ApacheSuperset()
    {
        return view('office.Excel.ApacheSuperset', [
            'PageTitle' => 'Apache Superset | Lap Tools Web',
            'PageDescription' => 'Discover Apache Superset, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }
    public function Baserow()
    {
        return view('office.Excel.Baserow', [
            'PageTitle' => 'Baserow | Lap Tools Web',
            'PageDescription' => 'Discover Baserow, a curated resource for spreadsheets and data tools on Lap Tools Web.'
        ]);
    }

    // Excel End Here

    // powerpoint End Here

    // Editing Start Here
    public function Editing()
    {
        return view('Editing.Editing', [
            'PageTitle' => 'Editing | Lap Tools Web',
            'PageDescription' => 'Discover Editing, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Photopea()
    {
        return view('Editing.Photopea', [
            'PageTitle' => 'Photopea | Lap Tools Web',
            'PageDescription' => 'Discover Photopea, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Clipchamp()
    {
        return view('Editing.Clipchamp', [
            'PageTitle' => 'Clipchamp | Lap Tools Web',
            'PageDescription' => 'Discover Clipchamp, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function AdobePremierePro()
    {
        return view('Editing.AdobePremierePro', [
            'PageTitle' => 'Adobe Premiere Pro | Lap Tools Web',
            'PageDescription' => 'Discover Adobe Premiere Pro, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function DaVinciResolve()
    {
        return view('Editing.DaVinciResolve', [
            'PageTitle' => 'Da Vinci Resolve | Lap Tools Web',
            'PageDescription' => 'Discover Da Vinci Resolve, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function CapCut()
    {
        return view('Editing.CapCut', [
            'PageTitle' => 'Cap Cut | Lap Tools Web',
            'PageDescription' => 'Discover Cap Cut, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function VeedIo()
    {
        return view('Editing.VeedIo', [
            'PageTitle' => 'Veed Io | Lap Tools Web',
            'PageDescription' => 'Discover Veed Io, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function InVideo()
    {
        return view('Editing.InVideo', [
            'PageTitle' => 'In Video | Lap Tools Web',
            'PageDescription' => 'Discover In Video, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Animoto()
    {
        return view('Editing.Animoto', [
            'PageTitle' => 'Animoto | Lap Tools Web',
            'PageDescription' => 'Discover Animoto, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Mixkit()
    {
        return view('Editing.Mixkit', [
            'PageTitle' => 'Mixkit | Lap Tools Web',
            'PageDescription' => 'Discover Mixkit, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function EpidemicSound()
    {
        return view('Editing.EpidemicSound', [
            'PageTitle' => 'Epidemic Sound | Lap Tools Web',
            'PageDescription' => 'Discover Epidemic Sound, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Pixabay()
    {
        return view('Editing.Pixabay', [
            'PageTitle' => 'Pixabay | Lap Tools Web',
            'PageDescription' => 'Discover Pixabay, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function PexelsVideo()
    {
        return view('Editing.PexelsVideo', [
            'PageTitle' => 'Pexels Video | Lap Tools Web',
            'PageDescription' => 'Discover Pexels Video, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Videezy()
    {
        return view('Editing.Videezy', [
            'PageTitle' => 'Videezy | Lap Tools Web',
            'PageDescription' => 'Discover Videezy, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function MotionArray()
    {
        return view('Editing.MotionArray', [
            'PageTitle' => 'Motion Array | Lap Tools Web',
            'PageDescription' => 'Discover Motion Array, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function FrameIo()
    {
        return view('Editing.FrameIo', [
            'PageTitle' => 'Frame Io | Lap Tools Web',
            'PageDescription' => 'Discover Frame Io, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function ShareAE()
    {
        return view('Editing.ShareAE', [
            'PageTitle' => 'Share AE | Lap Tools Web',
            'PageDescription' => 'Discover Share AE, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function VFXDownload()
    {
        return view('Editing.VFXDownload', [
            'PageTitle' => 'VFX Download | Lap Tools Web',
            'PageDescription' => 'Discover VFX Download, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function FlexClip()
    {
        return view('Editing.FlexClip', [
            'PageTitle' => 'Flex Clip | Lap Tools Web',
            'PageDescription' => 'Discover Flex Clip, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Runway()
    {
        return view('Editing.Runway', [
            'PageTitle' => 'Runway | Lap Tools Web',
            'PageDescription' => 'Discover Runway, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function WeVideo()
    {
        return view('Editing.WeVideo', [
            'PageTitle' => 'We Video | Lap Tools Web',
            'PageDescription' => 'Discover We Video, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function WaveVideo()
    {
        return view('Editing.WaveVideo', [
            'PageTitle' => 'Wave Video | Lap Tools Web',
            'PageDescription' => 'Discover Wave Video, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Renderforest()
    {
        return view('Editing.Renderforest', [
            'PageTitle' => 'Renderforest | Lap Tools Web',
            'PageDescription' => 'Discover Renderforest, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function OpusClip()
    {
        return view('Editing.OpusClip', [
            'PageTitle' => 'Opus Clip | Lap Tools Web',
            'PageDescription' => 'Discover Opus Clip, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Pictory()
    {
        return view('Editing.Pictory', [
            'PageTitle' => 'Pictory | Lap Tools Web',
            'PageDescription' => 'Discover Pictory, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Descript()
    {
        return view('Editing.Descript', [
            'PageTitle' => 'Descript | Lap Tools Web',
            'PageDescription' => 'Discover Descript, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Lumen5()
    {
        return view('Editing.Lumen5', [
            'PageTitle' => 'Lumen5 | Lap Tools Web',
            'PageDescription' => 'Discover Lumen5, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Filmora()
    {
        return view('Editing.Filmora', [
            'PageTitle' => 'Filmora | Lap Tools Web',
            'PageDescription' => 'Discover Filmora, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Flixier()
    {
        return view('Editing.Flixier', [
            'PageTitle' => 'Flixier | Lap Tools Web',
            'PageDescription' => 'Discover Flixier, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Biteable()
    {
        return view('Editing.Biteable', [
            'PageTitle' => 'Biteable | Lap Tools Web',
            'PageDescription' => 'Discover Biteable, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Animaker()
    {
        return view('Editing.Animaker', [
            'PageTitle' => 'Animaker | Lap Tools Web',
            'PageDescription' => 'Discover Animaker, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }
    public function Shotcut()
    {
        return view('Editing.Shotcut', [
            'PageTitle' => 'Shotcut | Lap Tools Web',
            'PageDescription' => 'Discover Shotcut, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }

    public function Kapwing()
    {
        return view('Editing.Kapwing', [
            'PageTitle' => 'Kapwing | Lap Tools Web',
            'PageDescription' => 'Discover Kapwing, a curated resource for video and media editing on Lap Tools Web.'
        ]);
    }

    // Editing End Here

    //  Mobile App Start Here
    public function MobileApp()
    {
        return view('Dev.Mobile.MobileApp', [
            'PageTitle' => 'Mobile App | Lap Tools Web',
            'PageDescription' => 'Discover Mobile App, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function AndroidDevelopers()
    {
        return view('Dev.Mobile.AndroidDevelopers', [
            'PageTitle' => 'Android Developers | Lap Tools Web',
            'PageDescription' => 'Discover Android Developers, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function AppleDeveloper()
    {
        return view('Dev.Mobile.AppleDeveloper', [
            'PageTitle' => 'Apple Developer | Lap Tools Web',
            'PageDescription' => 'Discover Apple Developer, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function AppGyver()
    {
        return view('Dev.Mobile.AppGyver', [
            'PageTitle' => 'App Gyver | Lap Tools Web',
            'PageDescription' => 'Discover App Gyver, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }

    public function FlutterDev()
    {
        return view('Dev.Mobile.FlutterDev', [
            'PageTitle' => 'Flutter Dev | Lap Tools Web',
            'PageDescription' => 'Discover Flutter Dev, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function ReactNativeDev()
    {
        return view('Dev.Mobile.ReactNativeDev', [
            'PageTitle' => 'React Native Dev | Lap Tools Web',
            'PageDescription' => 'Discover React Native Dev, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function pubDev()
    {
        return view('Dev.Mobile.pubDev', [
            'PageTitle' => 'Pub Dev | Lap Tools Web',
            'PageDescription' => 'Discover Pub Dev, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function npm()
    {
        return view('Dev.Mobile.npm', [
            'PageTitle' => 'Npm | Lap Tools Web',
            'PageDescription' => 'Discover Npm, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }

    public function MaterialDesign()
    {
        return view('Dev.Mobile.MaterialDesign', [
            'PageTitle' => 'Material Design | Lap Tools Web',
            'PageDescription' => 'Discover Material Design, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function RiveApp()
    {
        return view('Dev.Mobile.RiveApp', [
            'PageTitle' => 'Rive App | Lap Tools Web',
            'PageDescription' => 'Discover Rive App, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function v0Dev()
    {
        return view('Dev.Mobile.v0Dev', [
            'PageTitle' => 'V0 Dev | Lap Tools Web',
            'PageDescription' => 'Discover V0 Dev, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function Codemagic()
    {
        return view('Dev.Mobile.Codemagic', [
            'PageTitle' => 'Codemagic | Lap Tools Web',
            'PageDescription' => 'Discover Codemagic, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function ExpoApplicationServices()
    {
        return view('Dev.Mobile.ExpoApplicationServices', [
            'PageTitle' => 'Expo Application Services | Lap Tools Web',
            'PageDescription' => 'Discover Expo Application Services, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function AppIconGenerator()
    {
        return view('Dev.Mobile.AppIconGenerator', [
            'PageTitle' => 'App Icon Generator | Lap Tools Web',
            'PageDescription' => 'Discover App Icon Generator, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function Haikei()
    {
        return view('Dev.Mobile.Haikei', [
            'PageTitle' => 'Haikei | Lap Tools Web',
            'PageDescription' => 'Discover Haikei, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function Diawi()
    {
        return view('Dev.Mobile.Diawi', [
            'PageTitle' => 'Diawi | Lap Tools Web',
            'PageDescription' => 'Discover Diawi, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function BrowserStack()
    {
        return view('Dev.Mobile.BrowserStack', [
            'PageTitle' => 'Browser Stack | Lap Tools Web',
            'PageDescription' => 'Discover Browser Stack, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function JSONCrack()
    {
        return view('Dev.Mobile.JSONCrack', [
            'PageTitle' => 'JSON Crack | Lap Tools Web',
            'PageDescription' => 'Discover JSON Crack, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function Mockoon()
    {
        return view('Dev.Mobile.Mockoon', [
            'PageTitle' => 'Mockoon | Lap Tools Web',
            'PageDescription' => 'Discover Mockoon, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function mockapi()
    {
        return view('Dev.Mobile.mockapi', [
            'PageTitle' => 'Mockapi | Lap Tools Web',
            'PageDescription' => 'Discover Mockapi, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function DataAii()
    {
        return view('Dev.Mobile.DataAi', [
            'PageTitle' => 'Data Aii | Lap Tools Web',
            'PageDescription' => 'Discover Data Aii, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function Appradar()
    {
        return view('Dev.Mobile.Appradar', [
            'PageTitle' => 'Appradar | Lap Tools Web',
            'PageDescription' => 'Discover Appradar, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function RevenueCat()
    {
        return view('Dev.Mobile.RevenueCat', [
            'PageTitle' => 'Revenue Cat | Lap Tools Web',
            'PageDescription' => 'Discover Revenue Cat, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function OneSignal()
    {
        return view('Dev.Mobile.OneSignal', [
            'PageTitle' => 'One Signal | Lap Tools Web',
            'PageDescription' => 'Discover One Signal, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function AppFollow()
    {
        return view('Dev.Mobile.AppFollow', [
            'PageTitle' => 'App Follow | Lap Tools Web',
            'PageDescription' => 'Discover App Follow, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function SensorTower()
    {
        return view('Dev.Mobile.SensorTower', [
            'PageTitle' => 'Sensor Tower | Lap Tools Web',
            'PageDescription' => 'Discover Sensor Tower, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function medium()
    {
        return view('Dev.Mobile.medium', [
            'PageTitle' => 'Medium | Lap Tools Web',
            'PageDescription' => 'Discover Medium, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function FlutterGems()
    {
        return view('Dev.Mobile.FlutterGems', [
            'PageTitle' => 'Flutter Gems | Lap Tools Web',
            'PageDescription' => 'Discover Flutter Gems, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function Kotlinlang()
    {
        return view('Dev.Mobile.Kotlinlang', [
            'PageTitle' => 'Kotlinlang | Lap Tools Web',
            'PageDescription' => 'Discover Kotlinlang, a curated resource for mobile app development on Lap Tools Web.'
        ]);
    }
    public function swift()
    {
        return view('Dev.Mobile.swift.');

        // Mobile App End Here
    }
    // GameDevelopment Start Here
    public function GamesDevelopment()
    {
        return view('Dev.Games.GamesDevelopment', [
            'PageTitle' => 'Games Development | Lap Tools Web',
            'PageDescription' => 'Discover Games Development, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function Unity()
    {
        return view('Dev.Games.Unity', [
            'PageTitle' => 'Unity | Lap Tools Web',
            'PageDescription' => 'Discover Unity, a curated resource for game development on Lap Tools Web.'
        ]);
    }

    public function UnrealEngine()
    {
        return view('Dev.Games.UnrealEngine', [
            'PageTitle' => 'Unreal Engine | Lap Tools Web',
            'PageDescription' => 'Discover Unreal Engine, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function Construct()
    {
        return view('Dev.Games.Construct', [
            'PageTitle' => 'Construct | Lap Tools Web',
            'PageDescription' => 'Discover Construct, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function GodotEngine()
    {
        return view('Dev.Games.GodotEngine', [
            'PageTitle' => 'Godot Engine | Lap Tools Web',
            'PageDescription' => 'Discover Godot Engine, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function ItchIo()
    {
        return view('Dev.Games.ItchIo', [
            'PageTitle' => 'Itch Io | Lap Tools Web',
            'PageDescription' => 'Discover Itch Io, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function Sketchfab()
    {
        return view('Dev.Games.Sketchfab', [
            'PageTitle' => 'Sketchfab | Lap Tools Web',
            'PageDescription' => 'Discover Sketchfab, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function TurboSquid()
    {
        return view('Dev.Games.TurboSquid', [
            'PageTitle' => 'Turbo Squid | Lap Tools Web',
            'PageDescription' => 'Discover Turbo Squid, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function OpenGameArt()
    {
        return view('Dev.Games.OpenGameArt', [
            'PageTitle' => 'Open Game Art | Lap Tools Web',
            'PageDescription' => 'Discover Open Game Art, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function Freesound()
    {
        return view('Dev.Games.Freesound', [
            'PageTitle' => 'Freesound | Lap Tools Web',
            'PageDescription' => 'Discover Freesound, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function Soniss()
    {
        return view('Dev.Games.Soniss', [
            'PageTitle' => 'Soniss | Lap Tools Web',
            'PageDescription' => 'Discover Soniss, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function Incompetech()
    {
        return view('Dev.Games.Incompetech', [
            'PageTitle' => 'Incompetech | Lap Tools Web',
            'PageDescription' => 'Discover Incompetech, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function StackExchange()
    {
        return view('Dev.Games.StackExchange', [
            'PageTitle' => 'Stack Exchange | Lap Tools Web',
            'PageDescription' => 'Discover Stack Exchange, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function GameDeveloperWeb()
    {
        return view('Dev.Games.GameDeveloperWeb', [
            'PageTitle' => 'Game Developer Web | Lap Tools Web',
            'PageDescription' => 'Discover Game Developer Web, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function GameMaker()
    {
        return view('Dev.Games.GameMaker', [
            'PageTitle' => 'Game Maker | Lap Tools Web',
            'PageDescription' => 'Discover Game Maker, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function UnityLearn()
    {
        return view('Dev.Games.UnityLearn', [
            'PageTitle' => 'Unity Learn | Lap Tools Web',
            'PageDescription' => 'Discover Unity Learn, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function brackeys()
    {
        return view('Dev.Games.brackeys', [
            'PageTitle' => 'Brackeys | Lap Tools Web',
            'PageDescription' => 'Discover Brackeys, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function KenneyAssets()
    {
        return view('Dev.Games.KenneyAssets', [
            'PageTitle' => 'Kenney Assets | Lap Tools Web',
            'PageDescription' => 'Discover Kenney Assets, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function PolyPizza()
    {
        return view('Dev.Games.PolyPizza', [
            'PageTitle' => 'Poly Pizza | Lap Tools Web',
            'PageDescription' => 'Discover Poly Pizza, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function IndieDB()
    {
        return view('Dev.Games.IndieDB', [
            'PageTitle' => 'Indie DB | Lap Tools Web',
            'PageDescription' => 'Discover Indie DB, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function Steamworks()
    {
        return view('Dev.Games.Steamworks', [
            'PageTitle' => 'Steamworks | Lap Tools Web',
            'PageDescription' => 'Discover Steamworks, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function GameDesignLounge()
    {
        return view('Dev.Games.GameDesignLounge', [
            'PageTitle' => 'Game Design Lounge | Lap Tools Web',
            'PageDescription' => 'Discover Game Design Lounge, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function CGTrader()
    {
        return view('Dev.Games.CGTrader', [
            'PageTitle' => 'CG Trader | Lap Tools Web',
            'PageDescription' => 'Discover CG Trader, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function Mixamo()
    {
        return view('Dev.Games.Mixamo', [
            'PageTitle' => 'Mixamo | Lap Tools Web',
            'PageDescription' => 'Discover Mixamo, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function Cascadeur()
    {
        return view('Dev.Games.Cascadeur', [
            'PageTitle' => 'Cascadeur | Lap Tools Web',
            'PageDescription' => 'Discover Cascadeur, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function InworldAI()
    {
        return view('Dev.Games.InworldAI', [
            'PageTitle' => 'Inworld AI | Lap Tools Web',
            'PageDescription' => 'Discover Inworld AI, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function LeonardoAI()
    {
        return view('Dev.Games.LeonardoAI', [
            'PageTitle' => 'Leonardo AI | Lap Tools Web',
            'PageDescription' => 'Discover Leonardo AI, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function Phaser()
    {
        return view('Dev.Games.Phaser', [
            'PageTitle' => 'Phaser | Lap Tools Web',
            'PageDescription' => 'Discover Phaser, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function BabylonJs()
    {
        return view('Dev.Games.BabylonJs', [
            'PageTitle' => 'Babylon Js | Lap Tools Web',
            'PageDescription' => 'Discover Babylon Js, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function ThreeJs()
    {
        return view('Dev.Games.ThreeJs', [
            'PageTitle' => 'Three Js | Lap Tools Web',
            'PageDescription' => 'Discover Three Js, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function PlayFab()
    {
        return view('Dev.Games.PlayFab', [
            'PageTitle' => 'Play Fab | Lap Tools Web',
            'PageDescription' => 'Discover Play Fab, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function GameAnalytics()
    {
        return view('Dev.Games.GameAnalytics', [
            'PageTitle' => 'Game Analytics | Lap Tools Web',
            'PageDescription' => 'Discover Game Analytics, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function Level80()
    {
        return view('Dev.Games.Level80', [
            'PageTitle' => 'Level80 | Lap Tools Web',
            'PageDescription' => 'Discover Level80, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function PlasticSCM()
    {
        return view('Dev.Games.PlasticSCM', [
            'PageTitle' => 'Plastic SCM | Lap Tools Web',
            'PageDescription' => 'Discover Plastic SCM, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function Perforce()
    {
        return view('Dev.Games.Perforce', [
            'PageTitle' => 'Perforce | Lap Tools Web',
            'PageDescription' => 'Discover Perforce, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function RedBlobGames()
    {
        return view('Dev.Games.RedBlobGames', [
            'PageTitle' => 'Red Blob Games | Lap Tools Web',
            'PageDescription' => 'Discover Red Blob Games, a curated resource for game development on Lap Tools Web.'
        ]);
    }
    public function GlobalGameJam()
    {
        return view('Dev.Games.GlobalGameJam', [
            'PageTitle' => 'Global Game Jam | Lap Tools Web',
            'PageDescription' => 'Discover Global Game Jam, a curated resource for game development on Lap Tools Web.'
        ]);
    }

    // GameDevelopment End Here

    // Design Start Here
    public function Design()
    {
        return view('Design.Design', [
            'PageTitle' => 'Design | Lap Tools Web',
            'PageDescription' => 'Discover Design, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }

    // AIROOM Start Here
    public function AIROOM()
    {
        return view('AIROOM.AIROOM', [
            'PageTitle' => 'AIROOM | Lap Tools Web',
            'PageDescription' => 'Discover AIROOM, a curated resource for AI tools on Lap Tools Web.'
        ]);
    }

    // ChatAI Start Here
    public function ChatAI()
    {
        return view('AIROOM.ChatAI.ChatAI', [
            'PageTitle' => 'Chat AI | Lap Tools Web',
            'PageDescription' => 'Discover Chat AI, a curated resource for AI chat assistants on Lap Tools Web.'
        ]);
    }
    public function MetaAI()
    {
        return view('AIROOM.ChatAI.MetaAI', [
            'PageTitle' => 'Meta AI | Lap Tools Web',
            'PageDescription' => 'Discover Meta AI, a curated resource for AI chat assistants on Lap Tools Web.'
        ]);
    }
    // ChatAI End Here

    // PhotosAndvideos Start Here
    public function PhotosAndvideos()
    {
        return view('AIROOM.PhotosAndvideos.PhotosAndvideos', [
            'PageTitle' => 'Photos Andvideos | Lap Tools Web',
            'PageDescription' => 'Discover Photos Andvideos, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function Midjourney()
    {
        return view('AIROOM.PhotosAndvideos.Midjourney', [
            'PageTitle' => 'Midjourney | Lap Tools Web',
            'PageDescription' => 'Discover Midjourney, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function StableDiffusion()
    {
        return view('AIROOM.PhotosAndvideos.StableDiffusion', [
            'PageTitle' => 'Stable Diffusion | Lap Tools Web',
            'PageDescription' => 'Discover Stable Diffusion, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function AdobeFirefly()
    {
        return view('AIROOM.PhotosAndvideos.AdobeFirefly', [
            'PageTitle' => 'Adobe Firefly | Lap Tools Web',
            'PageDescription' => 'Discover Adobe Firefly, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function Ideogram()
    {
        return view('AIROOM.PhotosAndvideos.Ideogram', [
            'PageTitle' => 'Ideogram | Lap Tools Web',
            'PageDescription' => 'Discover Ideogram, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function Recraft()
    {
        return view('AIROOM.PhotosAndvideos.Recraft', [
            'PageTitle' => 'Recraft | Lap Tools Web',
            'PageDescription' => 'Discover Recraft, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function Playground()
    {
        return view('AIROOM.PhotosAndvideos.Playground', [
            'PageTitle' => 'Playground | Lap Tools Web',
            'PageDescription' => 'Discover Playground, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function NightCafe()
    {
        return view('AIROOM.PhotosAndvideos.NightCafe', [
            'PageTitle' => 'Night Cafe | Lap Tools Web',
            'PageDescription' => 'Discover Night Cafe, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function MageSpace()
    {
        return view('AIROOM.PhotosAndvideos.MageSpace', [
            'PageTitle' => 'Mage Space | Lap Tools Web',
            'PageDescription' => 'Discover Mage Space, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function KlingAI()
    {
        return view('AIROOM.PhotosAndvideos.KlingAI', [
            'PageTitle' => 'Kling AI | Lap Tools Web',
            'PageDescription' => 'Discover Kling AI, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function HailuoAI()
    {
        return view('AIROOM.PhotosAndvideos.HailuoAI', [
            'PageTitle' => 'Hailuo AI | Lap Tools Web',
            'PageDescription' => 'Discover Hailuo AI, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function Pika()
    {
        return view('AIROOM.PhotosAndvideos.Pika', [
            'PageTitle' => 'Pika | Lap Tools Web',
            'PageDescription' => 'Discover Pika, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function LumaDreamMachine()
    {
        return view('AIROOM.PhotosAndvideos.LumaDreamMachine', [
            'PageTitle' => 'Luma Dream Machine | Lap Tools Web',
            'PageDescription' => 'Discover Luma Dream Machine, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function PixVerseAI()
    {
        return view('AIROOM.PhotosAndvideos.PixVerseAI', [
            'PageTitle' => 'Pix Verse AI | Lap Tools Web',
            'PageDescription' => 'Discover Pix Verse AI, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function HeyGen()
    {
        return view('AIROOM.PhotosAndvideos.HeyGen', [
            'PageTitle' => 'Hey Gen | Lap Tools Web',
            'PageDescription' => 'Discover Hey Gen, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function Synthesia()
    {
        return view('AIROOM.PhotosAndvideos.Synthesia', [
            'PageTitle' => 'Synthesia | Lap Tools Web',
            'PageDescription' => 'Discover Synthesia, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function nanobanana()
    {
        return view('AIROOM.PhotosAndvideos.nanobanana', [
            'PageTitle' => 'Nanobanana | Lap Tools Web',
            'PageDescription' => 'Discover Nanobanana, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function TensorArt()
    {
        return view('AIROOM.PhotosAndvideos.TensorArt', [
            'PageTitle' => 'Tensor Art | Lap Tools Web',
            'PageDescription' => 'Discover Tensor Art, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function Civitai()
    {
        return view('AIROOM.PhotosAndvideos.Civitai', [
            'PageTitle' => 'Civitai | Lap Tools Web',
            'PageDescription' => 'Discover Civitai, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function Craiyon()
    {
        return view('AIROOM.PhotosAndvideos.Craiyon', [
            'PageTitle' => 'Craiyon | Lap Tools Web',
            'PageDescription' => 'Discover Craiyon, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function StarryAI()
    {
        return view('AIROOM.PhotosAndvideos.StarryAI', [
            'PageTitle' => 'Starry AI | Lap Tools Web',
            'PageDescription' => 'Discover Starry AI, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function Artbreeder()
    {
        return view('AIROOM.PhotosAndvideos.Artbreeder', [
            'PageTitle' => 'Artbreeder | Lap Tools Web',
            'PageDescription' => 'Discover Artbreeder, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function FotorAI()
    {
        return view('AIROOM.PhotosAndvideos.FotorAI', [
            'PageTitle' => 'Fotor AI | Lap Tools Web',
            'PageDescription' => 'Discover Fotor AI, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function DeepAI()
    {
        return view('AIROOM.PhotosAndvideos.DeepAI', [
            'PageTitle' => 'Deep AI | Lap Tools Web',
            'PageDescription' => 'Discover Deep AI, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function ImagineArt()
    {
        return view('AIROOM.PhotosAndvideos.ImagineArt', [
            'PageTitle' => 'Imagine Art | Lap Tools Web',
            'PageDescription' => 'Discover Imagine Art, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function GetimgAi()
    {
        return view('AIROOM.PhotosAndvideos.GetimgAi', [
            'PageTitle' => 'Getimg Ai | Lap Tools Web',
            'PageDescription' => 'Discover Getimg Ai, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function SeaArtAI()
    {
        return view('AIROOM.PhotosAndvideos.SeaArtAI', [
            'PageTitle' => 'Sea Art AI | Lap Tools Web',
            'PageDescription' => 'Discover Sea Art AI, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function OpenArt()
    {
        return view('AIROOM.PhotosAndvideos.OpenArt', [
            'PageTitle' => 'Open Art | Lap Tools Web',
            'PageDescription' => 'Discover Open Art, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function DzineAI()
    {
        return view('AIROOM.PhotosAndvideos.DzineAI', [
            'PageTitle' => 'Dzine AI | Lap Tools Web',
            'PageDescription' => 'Discover Dzine AI, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function HaiperAI()
    {
        return view('AIROOM.PhotosAndvideos.HaiperAI', [
            'PageTitle' => 'Haiper AI | Lap Tools Web',
            'PageDescription' => 'Discover Haiper AI, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function ViduAI()
    {
        return view('AIROOM.PhotosAndvideos.ViduAI', [
            'PageTitle' => 'Vidu AI | Lap Tools Web',
            'PageDescription' => 'Discover Vidu AI, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }
    public function HiggsfieldAI()
    {
        return view('AIROOM.PhotosAndvideos.HiggsfieldAI', [
            'PageTitle' => 'Higgsfield AI | Lap Tools Web',
            'PageDescription' => 'Discover Higgsfield AI, a curated resource for AI image and video generation on Lap Tools Web.'
        ]);
    }


    // PhotosAndvideos End Here
    // Automation Start Here
    public function Automation()
    {
        return view('AIROOM.Automation.Automation', [
            'PageTitle' => 'Automation | Lap Tools Web',
            'PageDescription' => 'Discover Automation, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }

    public function Zapier()
    {
        return view('AIROOM.Automation.Zapier', [
            'PageTitle' => 'Zapier | Lap Tools Web',
            'PageDescription' => 'Discover Zapier, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function nOps()
    {
        return view('AIROOM.Automation.nOps', [
            'PageTitle' => 'N Ops | Lap Tools Web',
            'PageDescription' => 'Discover N Ops, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Make()
    {
        return view('AIROOM.Automation.Make', [
            'PageTitle' => 'Make | Lap Tools Web',
            'PageDescription' => 'Discover Make, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function n8n()
    {
        return view('AIROOM.Automation.n8n', [
            'PageTitle' => 'N8n | Lap Tools Web',
            'PageDescription' => 'Discover N8n, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Pipedream()
    {
        return view('AIROOM.Automation.Pipedream', [
            'PageTitle' => 'Pipedream | Lap Tools Web',
            'PageDescription' => 'Discover Pipedream, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function IFTTT()
    {
        return view('AIROOM.Automation.IFTTT', [
            'PageTitle' => 'IFTTT | Lap Tools Web',
            'PageDescription' => 'Discover IFTTT, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function RelayApp()
    {
        return view('AIROOM.Automation.RelayApp', [
            'PageTitle' => 'Relay App | Lap Tools Web',
            'PageDescription' => 'Discover Relay App, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Albato()
    {
        return view('AIROOM.Automation.Albato', [
            'PageTitle' => 'Albato | Lap Tools Web',
            'PageDescription' => 'Discover Albato, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Integrately()
    {
        return view('AIROOM.Automation.Integrately', [
            'PageTitle' => 'Integrately | Lap Tools Web',
            'PageDescription' => 'Discover Integrately, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function AgentGPT()
    {
        return view('AIROOM.Automation.AgentGPT', [
            'PageTitle' => 'Agent GPT | Lap Tools Web',
            'PageDescription' => 'Discover Agent GPT, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function AutoGPT()
    {
        return view('AIROOM.Automation.AutoGPT', [
            'PageTitle' => 'Auto GPT | Lap Tools Web',
            'PageDescription' => 'Discover Auto GPT, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Flowise()
    {
        return view('AIROOM.Automation.Flowise', [
            'PageTitle' => 'Flowise | Lap Tools Web',
            'PageDescription' => 'Discover Flowise, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Dify()
    {
        return view('AIROOM.Automation.Dify', [
            'PageTitle' => 'Dify | Lap Tools Web',
            'PageDescription' => 'Discover Dify, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function ActiveCampaign()
    {
        return view('AIROOM.Automation.ActiveCampaign', [
            'PageTitle' => 'Active Campaign | Lap Tools Web',
            'PageDescription' => 'Discover Active Campaign, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Mailchimp()
    {
        return view('AIROOM.Automation.Mailchimp', [
            'PageTitle' => 'Mailchimp | Lap Tools Web',
            'PageDescription' => 'Discover Mailchimp, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Brevo()
    {
        return view('AIROOM.Automation.Brevo', [
            'PageTitle' => 'Brevo | Lap Tools Web',
            'PageDescription' => 'Discover Brevo, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function HubSpot()
    {
        return view('AIROOM.Automation.HubSpot', [
            'PageTitle' => 'Hub Spot | Lap Tools Web',
            'PageDescription' => 'Discover Hub Spot, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Buffer()
    {
        return view('AIROOM.Automation.Buffer', [
            'PageTitle' => 'Buffer | Lap Tools Web',
            'PageDescription' => 'Discover Buffer, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Publer()
    {
        return view('AIROOM.Automation.Publer', [
            'PageTitle' => 'Publer | Lap Tools Web',
            'PageDescription' => 'Discover Publer, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Metricool()
    {
        return view('AIROOM.Automation.Metricool', [
            'PageTitle' => 'Metricool | Lap Tools Web',
            'PageDescription' => 'Discover Metricool, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function UiPath()
    {
        return view('AIROOM.Automation.UiPath', [
            'PageTitle' => 'Ui Path | Lap Tools Web',
            'PageDescription' => 'Discover Ui Path, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function AutomationAnywhere()
    {
        return view('AIROOM.Automation.AutomationAnywhere', [
            'PageTitle' => 'Automation Anywhere | Lap Tools Web',
            'PageDescription' => 'Discover Automation Anywhere, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Robocorp()
    {
        return view('AIROOM.Automation.Robocorp', [
            'PageTitle' => 'Robocorp | Lap Tools Web',
            'PageDescription' => 'Discover Robocorp, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function LindyAI()
    {
        return view('AIROOM.Automation.LindyAI', [
            'PageTitle' => 'Lindy AI | Lap Tools Web',
            'PageDescription' => 'Discover Lindy AI, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Gumloop()
    {
        return view('AIROOM.Automation.Gumloop', [
            'PageTitle' => 'Gumloop | Lap Tools Web',
            'PageDescription' => 'Discover Gumloop, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Bardeen()
    {
        return view('AIROOM.Automation.Bardeen', [
            'PageTitle' => 'Bardeen | Lap Tools Web',
            'PageDescription' => 'Discover Bardeen, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Airtop()
    {
        return view('AIROOM.Automation.Airtop', [
            'PageTitle' => 'Airtop | Lap Tools Web',
            'PageDescription' => 'Discover Airtop, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function TaskadeAIAgents()
    {
        return view('AIROOM.Automation.TaskadeAIAgents', [
            'PageTitle' => 'Taskade AI Agents | Lap Tools Web',
            'PageDescription' => 'Discover Taskade AI Agents, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Workato()
    {
        return view('AIROOM.Automation.Workato', [
            'PageTitle' => 'Workato | Lap Tools Web',
            'PageDescription' => 'Discover Workato, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function TrayAi()
    {
        return view('AIROOM.Automation.TrayAi', [
            'PageTitle' => 'Tray Ai | Lap Tools Web',
            'PageDescription' => 'Discover Tray Ai, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function RelevanceAI()
    {
        return view('AIROOM.Automation.RelevanceAI', [
            'PageTitle' => 'Relevance AI | Lap Tools Web',
            'PageDescription' => 'Discover Relevance AI, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function SuperAGI()
    {
        return view('AIROOM.Automation.SuperAGI', [
            'PageTitle' => 'Super AGI | Lap Tools Web',
            'PageDescription' => 'Discover Super AGI, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function LangChain()
    {
        return view('AIROOM.Automation.LangChain', [
            'PageTitle' => 'Lang Chain | Lap Tools Web',
            'PageDescription' => 'Discover Lang Chain, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Temporal()
    {
        return view('AIROOM.Automation.Temporal', [
            'PageTitle' => 'Temporal | Lap Tools Web',
            'PageDescription' => 'Discover Temporal, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Kestra()
    {
        return view('AIROOM.Automation.Kestra', [
            'PageTitle' => 'Kestra | Lap Tools Web',
            'PageDescription' => 'Discover Kestra, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }
    public function Glide()
    {
        return view('AIROOM.Automation.Glide', [
            'PageTitle' => 'Glide | Lap Tools Web',
            'PageDescription' => 'Discover Glide, a curated resource for workflow automation on Lap Tools Web.'
        ]);
    }


    // Automation End Here
    public function ChatGPT()
    {
        return view('AIROOM.ChatAI.ChatGPT', [
            'PageTitle' => 'Chat GPT | Lap Tools Web',
            'PageDescription' => 'Discover Chat GPT, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Gemini()
    {
        return view('AIROOM.ChatAI.Gemini', [
            'PageTitle' => 'Gemini | Lap Tools Web',
            'PageDescription' => 'Discover Gemini, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Claudee()
    {
        return view('AIROOM.ChatAI.Claude', [
            'PageTitle' => 'Claudee | Lap Tools Web',
            'PageDescription' => 'Discover Claudee, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Copilot()
    {
        return view('AIROOM.ChatAI.Copilot', [
            'PageTitle' => 'Copilot | Lap Tools Web',
            'PageDescription' => 'Discover Copilot, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function deepseek()
    {
        return view('AIROOM.ChatAI.deepseek', [
            'PageTitle' => 'Deepseek | Lap Tools Web',
            'PageDescription' => 'Discover Deepseek, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function munas()
    {
        return view('AIROOM.ChatAI.munas', [
            'PageTitle' => 'Munas | Lap Tools Web',
            'PageDescription' => 'Discover Munas, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Perplexity()
    {
        return view('AIROOM.ChatAI.Perplexity', [
            'PageTitle' => 'Perplexity | Lap Tools Web',
            'PageDescription' => 'Discover Perplexity, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function YouCom()
    {
        return view('AIROOM.ChatAI.YouCom', [
            'PageTitle' => 'You Com | Lap Tools Web',
            'PageDescription' => 'Discover You Com, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Phind()
    {
        return view('AIROOM.ChatAI.Phind', [
            'PageTitle' => 'Phind | Lap Tools Web',
            'PageDescription' => 'Discover Phind, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Poe()
    {
        return view('AIROOM.ChatAI.Poe', [
            'PageTitle' => 'Poe | Lap Tools Web',
            'PageDescription' => 'Discover Poe, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function CharacterAI()
    {
        return view('AIROOM.ChatAI.CharacterAI', [
            'PageTitle' => 'Character AI | Lap Tools Web',
            'PageDescription' => 'Discover Character AI, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Replika()
    {
        return view('AIROOM.ChatAI.Replika', [
            'PageTitle' => 'Replika | Lap Tools Web',
            'PageDescription' => 'Discover Replika, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Grok()
    {
        return view('AIROOM.ChatAI.Grok', [
            'PageTitle' => 'Grok | Lap Tools Web',
            'PageDescription' => 'Discover Grok, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function PiAI()
    {
        return view('AIROOM.ChatAI.PiAI', [
            'PageTitle' => 'Pi AI | Lap Tools Web',
            'PageDescription' => 'Discover Pi AI, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Mistral()
    {
        return view('AIROOM.ChatAI.Mistral', [
            'PageTitle' => 'Mistral | Lap Tools Web',
            'PageDescription' => 'Discover Mistral, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Qwen()
    {
        return view('AIROOM.ChatAI.Qwen', [
            'PageTitle' => 'Qwen | Lap Tools Web',
            'PageDescription' => 'Discover Qwen, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Kimi()
    {
        return view('AIROOM.ChatAI.Kimi', [
            'PageTitle' => 'Kimi | Lap Tools Web',
            'PageDescription' => 'Discover Kimi, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function HIX()
    {
        return view('AIROOM.ChatAI.HIX', [
            'PageTitle' => 'HIX | Lap Tools Web',
            'PageDescription' => 'Discover HIX, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Monica()
    {
        return view('AIROOM.ChatAI.Monica', [
            'PageTitle' => 'Monica | Lap Tools Web',
            'PageDescription' => 'Discover Monica, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Blackbox()
    {
        return view('AIROOM.ChatAI.Blackbox', [
            'PageTitle' => 'Blackbox | Lap Tools Web',
            'PageDescription' => 'Discover Blackbox, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function AskAI()
    {
        return view('AIROOM.ChatAI.AskAI', [
            'PageTitle' => 'Ask AI | Lap Tools Web',
            'PageDescription' => 'Discover Ask AI, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Nova()
    {
        return view('AIROOM.ChatAI.Nova', [
            'PageTitle' => 'Nova | Lap Tools Web',
            'PageDescription' => 'Discover Nova, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function GenieAI()
    {
        return view('AIROOM.ChatAI.GenieAI', [
            'PageTitle' => 'Genie AI | Lap Tools Web',
            'PageDescription' => 'Discover Genie AI, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function ChatOn()
    {
        return view('AIROOM.ChatAI.ChatOn', [
            'PageTitle' => 'Chat On | Lap Tools Web',
            'PageDescription' => 'Discover Chat On, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Elicit()
    {
        return view('AIROOM.ChatAI.Elicit', [
            'PageTitle' => 'Elicit | Lap Tools Web',
            'PageDescription' => 'Discover Elicit, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Consensus()
    {
        return view('AIROOM.ChatAI.Consensus', [
            'PageTitle' => 'Consensus | Lap Tools Web',
            'PageDescription' => 'Discover Consensus, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function SciSpace()
    {
        return view('AIROOM.ChatAI.SciSpace', [
            'PageTitle' => 'Sci Space | Lap Tools Web',
            'PageDescription' => 'Discover Sci Space, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function ResearchRabbit()
    {
        return view('AIROOM.ChatAI.ResearchRabbit', [
            'PageTitle' => 'Research Rabbit | Lap Tools Web',
            'PageDescription' => 'Discover Research Rabbit, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function NotionAI()
    {
        return view('AIROOM.ChatAI.NotionAI', [
            'PageTitle' => 'Notion AI | Lap Tools Web',
            'PageDescription' => 'Discover Notion AI, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function ClickUp()
    {
        return view('AIROOM.ChatAI.ClickUp', [
            'PageTitle' => 'Click Up | Lap Tools Web',
            'PageDescription' => 'Discover Click Up, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }

    // Automation End Here

    // AIROOM End Here

    public function contactUs()
    {
        return view('contactUs', [
            'PageTitle' => 'Contact Us | Lap Tools Web',
            'PageDescription' => 'Discover Contact Us, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Behance()
    {
        return view('Design.Behance', [
            'PageTitle' => 'Behance | Lap Tools Web',
            'PageDescription' => 'Discover Behance, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Dribbble()
    {
        return view('Design.Dribbble', [
            'PageTitle' => 'Dribbble | Lap Tools Web',
            'PageDescription' => 'Discover Dribbble, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Pinterest()
    {
        return view('Design.Pinterest', [
            'PageTitle' => 'Pinterest | Lap Tools Web',
            'PageDescription' => 'Discover Pinterest, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Awwwards()
    {
        return view('Design.Awwwards', [
            'PageTitle' => 'Awwwards | Lap Tools Web',
            'PageDescription' => 'Discover Awwwards, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function ArtStation()
    {
        return view('Design.ArtStation', [
            'PageTitle' => 'Art Station | Lap Tools Web',
            'PageDescription' => 'Discover Art Station, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Envato()
    {
        return view('Design.Envato', [
            'PageTitle' => 'Envato | Lap Tools Web',
            'PageDescription' => 'Discover Envato, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Canva()
    {
        return view('Design.Canva', [
            'PageTitle' => 'Canva | Lap Tools Web',
            'PageDescription' => 'Discover Canva, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Designspiration()
    {
        return view('Design.Designspiration', [
            'PageTitle' => 'Designspiration | Lap Tools Web',
            'PageDescription' => 'Discover Designspiration, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Lottiefiles()
    {
        return view('Design.Lottiefiles', [
            'PageTitle' => 'Lottiefiles | Lap Tools Web',
            'PageDescription' => 'Discover Lottiefiles, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Coolors()
    {
        return view('Design.Coolors', [
            'PageTitle' => 'Coolors | Lap Tools Web',
            'PageDescription' => 'Discover Coolors, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Unsplash()
    {
        return view('Design.Unsplash', [
            'PageTitle' => 'Unsplash | Lap Tools Web',
            'PageDescription' => 'Discover Unsplash, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Icons8()
    {
        return view('Design.Icons8', [
            'PageTitle' => 'Icons8 | Lap Tools Web',
            'PageDescription' => 'Discover Icons8, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Magnific()
    {
        return view('Design.Magnific', [
            'PageTitle' => 'Magnific | Lap Tools Web',
            'PageDescription' => 'Discover Magnific, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Mobbin()
    {
        return view('Design.Mobbin', [
            'PageTitle' => 'Mobbin | Lap Tools Web',
            'PageDescription' => 'Discover Mobbin, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Flaticon()
    {
        return view('Design.Flaticon', [
            'PageTitle' => 'Flaticon | Lap Tools Web',
            'PageDescription' => 'Discover Flaticon, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function unDraw()
    {
        return view('Design.unDraw', [
            'PageTitle' => 'Un Draw | Lap Tools Web',
            'PageDescription' => 'Discover Un Draw, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function AdobeColor()
    {
        return view('Design.AdobeColor', [
            'PageTitle' => 'Adobe Color | Lap Tools Web',
            'PageDescription' => 'Discover Adobe Color, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function HappyHues()
    {
        return view('Design.HappyHues', [
            'PageTitle' => 'Happy Hues | Lap Tools Web',
            'PageDescription' => 'Discover Happy Hues, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function LSGraphics()
    {
        return view('Design.LSGraphics', [
            'PageTitle' => 'LS Graphics | Lap Tools Web',
            'PageDescription' => 'Discover LS Graphics, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function wordmark()
    {
        return view('Design.wordmark', [
            'PageTitle' => 'Wordmark | Lap Tools Web',
            'PageDescription' => 'Discover Wordmark, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function LogoLounge()
    {
        return view('Design.LogoLounge', [
            'PageTitle' => 'Logo Lounge | Lap Tools Web',
            'PageDescription' => 'Discover Logo Lounge, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Khroma()
    {
        return view('Design.Khroma', [
            'PageTitle' => 'Khroma | Lap Tools Web',
            'PageDescription' => 'Discover Khroma, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function PhosphorIcons()
    {
        return view('Design.PhosphorIcons', [
            'PageTitle' => 'Phosphor Icons | Lap Tools Web',
            'PageDescription' => 'Discover Phosphor Icons, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Logopond()
    {
        return view('Design.Logopond', [
            'PageTitle' => 'Logopond | Lap Tools Web',
            'PageDescription' => 'Discover Logopond, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function BrandNew()
    {
        return view('Design.BrandNew', [
            'PageTitle' => 'Brand New | Lap Tools Web',
            'PageDescription' => 'Discover Brand New, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function D99designs()
    {
        return view('Design.D99designs', [
            'PageTitle' => 'D99designs | Lap Tools Web',
            'PageDescription' => 'Discover D99designs, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function WorkingNotWorking()
    {
        return view('Design.WorkingNotWorking', [
            'PageTitle' => 'Working Not Working | Lap Tools Web',
            'PageDescription' => 'Discover Working Not Working, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Vecteezy()
    {
        return view('Design.Vecteezy', [
            'PageTitle' => 'Vecteezy | Lap Tools Web',
            'PageDescription' => 'Discover Vecteezy, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function AdobeStock()
    {
        return view('Design.AdobeStock', [
            'PageTitle' => 'Adobe Stock | Lap Tools Web',
            'PageDescription' => 'Discover Adobe Stock, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function VistaCreate()
    {
        return view('Design.VistaCreate', [
            'PageTitle' => 'Vista Create | Lap Tools Web',
            'PageDescription' => 'Discover Vista Create, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function GraphicBurger()
    {
        return view('Design.GraphicBurger', [
            'PageTitle' => 'Graphic Burger | Lap Tools Web',
            'PageDescription' => 'Discover Graphic Burger, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function Pexel()
    {
        return view('Design.Pexel', [
            'PageTitle' => 'Pexel | Lap Tools Web',
            'PageDescription' => 'Discover Pexel, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function GoogleFonts()
    {
        return view('Design.GoogleFonts', [
            'PageTitle' => 'Google Fonts | Lap Tools Web',
            'PageDescription' => 'Discover Google Fonts, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function MockupWorld()
    {
        return view('Design.MockupWorld', [
            'PageTitle' => 'Mockup World | Lap Tools Web',
            'PageDescription' => 'Discover Mockup World, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function RemoveBg()
    {
        return view('Dev.Design.RemoveBg', [
            'PageTitle' => 'Remove Bg | Lap Tools Web',
            'PageDescription' => 'Discover Remove Bg, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }

    public function TinyPNG()
    {
        return view('Dev.Design.TinyPNG', [
            'PageTitle' => 'Tiny PNG | Lap Tools Web',
            'PageDescription' => 'Discover Tiny PNG, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    public function BlushDesign()
    {
        return view('Dev.Design.BlushDesign', [
            'PageTitle' => 'Blush Design | Lap Tools Web',
            'PageDescription' => 'Discover Blush Design, a curated resource for graphic and web design on Lap Tools Web.'
        ]);
    }
    // Design End Here
}
