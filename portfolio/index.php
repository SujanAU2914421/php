

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="./css/tailwind.css" />
		<style>
			@font-face {
				font-family: muli;
				src: url(./fonts/muli/Muli.ttf);
			}
			* {
				font-family: muli;
				scroll-behavior: smooth;
			}
			::-webkit-scrollbar {
				display: none;
			}
		</style>
	</head>
	<body>
		<div class="relative h-screen w-screen overflow-hidden" style="background: white; z-index: 9999999999999">
			<div
				class="fixed h-auto w-[200px] rounded-md shadow-xl navBox bg-white duration-300 right-4 top-[110px] z-30"
				style="display: none"
			>
				<div class="relative h-auto w-full px-0 py-0">
					<div class="relative h-auto w-full">
						<div class="relative h-auto w-full">
							<div
								class="relative h-[40px] px-5 w-full flex items-center justify-between"
							>
								<div class="relative h-auto w-auto font-extrabold text-sm">
									Menu
								</div>
								<div
									class="relative h-auto w-auto flex items-center justify-center text-xs hideNavBoxBtn cursor-pointer"
								>
									<i class="relative fa fa-times"></i>
								</div>
							</div>
						</div>
						<div class="relative h-auto w-full">
							<div class="relative h-auto w-full grid gap-3">
								<div class="relative h-auto w-full py-2">
									<div
										class="relative h-auto w-full flex items-center justify-between"
									>
										<div class="relative h-auto w-full">
											<div
												class="relative h-auto w-full grid gap-1 capitalize text-xs font-light"
											>
												<a
													href="#home"
													class="relative w-full flex items-center gap-3 h-[40px] px-6 bg-transparent hover:bg-purple-100 duration-150 cursor-pointer navBoxLinkBtns"
												>
													<div
														class="bg-transparent relative h-full w-auto text-sm flex items-center justify-center"
													>
														<svg
															width="14"
															height="14"
															viewBox="0 0 24 24"
															fill="none"
															stroke="black"
															stroke-width="2"
															stroke-linecap="round"
															stroke-linejoin="round"
															class="feather feather-home"
														>
															<path
																d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
															></path>
															<polyline
																points="9 22 9 12 15 12 15 22"
															></polyline>
														</svg>
													</div>
													<div class="relative h-auto w-full">
														<div class="relative h-auto w-auto">Home</div>
													</div>
												</a>
												<a
													href="#webDevelopment"
													class="relative w-full flex items-center gap-3 h-[40px] px-6 bg-transparent hover:bg-purple-100 duration-150 cursor-pointer navBoxLinkBtns"
												>
													<div
														class="bg-transparent relative h-full w-auto text-sm flex items-center justify-center"
													>
														<svg
															width="14"
															height="14"
															viewBox="0 0 24 24"
															fill="none"
															stroke="currentColor"
															stroke-width="2"
															stroke-linecap="round"
															stroke-linejoin="round"
															class="feather feather-octagon"
														>
															<polygon
																points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"
															></polygon>
														</svg>
													</div>
													<div class="relative h-auto w-full">
														<div class="relative h-auto w-auto">activities</div>
													</div>
												</a>
												<a
													href="#home"
													class="relative w-full flex items-center gap-3 h-[40px] px-6 bg-transparent hover:bg-purple-100 duration-150 cursor-pointer navBoxLinkBtns"
												>
													<div
														class="bg-transparent relative h-full w-auto text-sm flex items-center justify-center"
													>
														<svg
															width="14"
															height="14"
															viewBox="0 0 24 24"
															fill="none"
															stroke="currentColor"
															stroke-width="2"
															stroke-linecap="round"
															stroke-linejoin="round"
															class="feather feather-users"
														>
															<path
																d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"
															></path>
															<circle cx="9" cy="7" r="4"></circle>
															<path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
															<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
														</svg>
													</div>
													<div class="relative h-auto w-full">
														<div class="relative h-auto w-auto">Profiles</div>
													</div>
												</a>
												<a
													href="#home"
													class="relative w-full flex items-center gap-3 h-[40px] px-6 bg-transparent hover:bg-purple-100 duration-150 cursor-pointer"
												>
													<div
														class="bg-transparent relative h-full w-auto text-sm flex items-center justify-center"
													>
														<svg
															xmlns="http://www.w3.org/2000/svg"
															width="14"
															height="14"
															viewBox="0 0 24 24"
															fill="none"
															stroke="currentColor"
															stroke-width="2"
															stroke-linecap="round"
															stroke-linejoin="round"
															class="feather feather-download-cloud"
														>
															<polyline points="8 17 12 21 16 17"></polyline>
															<line x1="12" y1="12" x2="12" y2="21"></line>
															<path
																d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"
															></path>
														</svg>
													</div>
													<div class="relative h-auto w-full">
														<div class="relative h-auto w-auto">DownloadCV</div>
													</div>
												</a>
												<a
													href="#contact"
													class="relative w-full flex items-center gap-3 h-[40px] px-6 bg-transparent hover:bg-purple-100 duration-150 cursor-pointer navBoxLinkBtns"
												>
													<div
														class="bg-transparent relative h-full w-auto text-sm flex items-center justify-center"
													>
														<svg
															width="14"
															height="14"
															viewBox="0 0 24 24"
															fill="none"
															stroke="currentColor"
															stroke-width="2"
															stroke-linecap="round"
															stroke-linejoin="round"
															class="feather feather-phone-call"
														>
															<path
																d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
															></path>
														</svg>
													</div>
													<div class="relative h-auto w-full">
														<div class="relative h-auto w-auto">Contact</div>
													</div>
												</a>
												<a
													href="#footer"
													class="relative w-full flex items-center gap-3 h-[40px] px-6 bg-transparent hover:bg-purple-100 duration-150 cursor-pointer navBoxLinkBtns"
												>
													<div
														class="bg-transparent relative h-full w-auto text-sm flex items-center justify-center"
													>
														<svg
															width="14"
															height="14"
															viewBox="0 0 24 24"
															fill="none"
															stroke="currentColor"
															stroke-width="2"
															stroke-linecap="round"
															stroke-linejoin="round"
															class="feather feather-plus"
														>
															<line x1="12" y1="5" x2="12" y2="19"></line>
															<line x1="5" y1="12" x2="19" y2="12"></line>
														</svg>
													</div>
													<div class="relative h-auto w-full">
														<div class="relative h-auto w-auto">
															More About Me
														</div>
													</div></a
												>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="relative h-full w-full maincontainer">
				<div
					class="relative xl:h-[100px] lg:h-[100px] md:h-[100px] h-[80px] w-full"
				>
					<div
						class="relative h-full w-full flex items-center justify-between xl:px-40 lg:px-40 md:px-32 sm:px-8 px-4"
					>
						<div class="relative h-auto w-auto flex items-end gap-1">
							<div class="relative h-auto w-auto text-2xl font-extrabold gap-0">
								SU
							</div>
							<span class="relative text-xs font-light">jan</span>
						</div>
						<div
							class="relative h-full w-auto items-center gap-20 xl:flex lg:flex hidden"
						>
							<div class="relative h-auto w-auto flex items-center gap-16">
								<a href="#home" class="relative h-auto w-auto">Home</a>
								<a href="#profile" class="relative h-auto w-auto">Profiles</a>
								<a href="#footer" class="relative h-auto w-auto">More</a>
							</div>
						</div>
						<div class="relative h-auto w-auto flex gap-8 items-center">
							<div class="relative h-auto w-auto flex items-center gap-8">
								<a
									href="#contact"
									class="relative h-[40px] w-[120px] rounded-full border-purple-500 hover:bg-purple-500 hover:text-white duration-300 cursor-pointer border text-purple-500 text-xs flex items-center justify-center contactLinkBtn"
								>
									Contact Me
								</a>
							</div>
							<div
								class="relative h-auto w-auto items-center justify-center navigationBtn cursor-pointer xl:hidden lg:hidden flex"
							>
								<div class="relative h-auto w-auto">
									<div class="h-[40px] w-[40px] px-2 py-2">
										<div
											class="relative h-[2px] w-full rounded-full ml-auto bg-black my-[6px]"
										></div>
										<div
											class="relative h-[2px] w-3/5 rounded-full ml-auto bg-black my-[6px]"
										></div>
										<div
											class="relative h-[2px] w-4/5 rounded-full ml-auto bg-black my-[6px]"
										></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div
					class="relative xl:h-[calc(100%-100px)] lg:h-[calc(100%-100px)] md:h-[calc(100%-100px)] h-[calc(100%-80px)] w-full overflow-hidden"
				>
					<div class="relative h-full w-full">
						<div
							class="relative h-full w-full overflow-y-auto overflow-x-hidden xl:px-40 lg:px-40 md:px-32 sm:px-8 px-4 scrollBox"
						>
							<div class="relative w-full h-auto contentContainer">
								<div class="fixed bottom-8 right-2 z-10 px-4">
									<div
										class="relative h-auto w-auto goDown"
										style="display: none"
									>
										<a
											href="#home"
											class="relative flex items-center justify-center text-purple-500"
										>
											<svg
												width="30"
												height="30"
												viewBox="0 0 24 24"
												fill="none"
												stroke="currentColor"
												stroke-width="1"
												stroke-linecap="round"
												stroke-linejoin="round"
											>
												<line x1="12" y1="19" x2="12" y2="5"></line>
												<polyline points="5 12 12 5 19 12"></polyline>
											</svg>
										</a>
									</div>
									<div
										class="relative h-auto w-auto goUp"
										style="display: none"
									>
										<a
											href="#webDevelopment"
											class="relative flex items-center justify-center text-purple-500"
										>
											<svg
												width="30"
												height="30"
												viewBox="0 0 24 24"
												fill="none"
												stroke="currentColor"
												stroke-width="1"
												stroke-linecap="round"
												stroke-linejoin="round"
											>
												<line x1="12" y1="5" x2="12" y2="19"></line>
												<polyline points="19 12 12 19 5 12"></polyline>
											</svg>
										</a>
									</div>
								</div>
								<div class="relative w-full content" id="home">
									<div
										class="relative h-full w-full flex items-center justify-between py-16 flex-wrap-reverse"
									>
										<div
											class="relative h-auto xl:w-1/2 lg:w-1/2 md:w-1/2 w-full grid gap-8"
										>
											<div class="relative h-auto w-auto">
												<div
													class="relative h-[40px] w-[40px] rounded-md bg-purple-500 text-white flex items-center justify-center"
												>
													SL
												</div>
											</div>
											<div class="relative h-auto w-full grid gap-4">
												<div
													class="relative h-auto w-auto text-md font-light text-purple-500"
												>
													Hello
													<span class="h-auto w-auto font-extrabold">World</span
													>!
												</div>
												<div class="relative font-2xl text-gray-700">
													Hey I am Sujan Limbu. I am a beginer in this field.
													And am a student of class 10.
												</div>
												<div class="relative h-auto w-auto">
													<div
														class="relative h-auto w-auto flex items-center gap-4 flex-wrap"
													>
														<div
															class="relative group h-[40px] w-[150px] bg-purple-500 rounded-md text-white flex justify-between items-center px-4 cursor-pointer"
														>
															<div
																class="relative h-auto w-auto text-xs font-bold"
															>
																Hire me
															</div>
															<div
																class="relative h-auto w-auto translate-x-1 group-hover:translate-x-0 duration-300 opacity-0 group-hover:opacity-100"
															>
																<svg
																	width="17"
																	height="17"
																	viewBox="0 0 24 24"
																	fill="none"
																	stroke="currentColor"
																	stroke-width="2"
																	stroke-linecap="round"
																	stroke-linejoin="round"
																	class="feather feather-arrow-right"
																>
																	<line x1="5" y1="12" x2="19" y2="12"></line>
																	<polyline
																		points="12 5 19 12 12 19"
																	></polyline>
																</svg>
															</div>
														</div>
														<div
															class="relative group h-[40px] w-[150px] border-purple-500 border rounded-md text-purple-500 flex justify-between items-center px-4 cursor-pointer"
														>
															<div
																class="relative h-auto w-auto text-xs font-bold"
															>
																Download CV
															</div>
															<div
																class="relative h-auto w-auto -translate-y-1 group-hover:-translate-y-0 duration-300 opacity-0 group-hover:opacity-100"
															>
																<svg
																	width="17"
																	height="17"
																	viewBox="0 0 24 24"
																	fill="none"
																	stroke="currentColor"
																	stroke-width="2"
																	stroke-linecap="round"
																	stroke-linejoin="round"
																	class="feather feather-arrow-down"
																>
																	<line x1="12" y1="5" x2="12" y2="19"></line>
																	<polyline
																		points="19 12 12 19 5 12"
																	></polyline>
																</svg>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div
												class="relative h-auto w-auto flex items-center gap-4 text-xl"
											>
												<div
													class="relative hover:text-purple-600 duration-300 cursor-pointer h-auto w-auto text-gray-400"
												>
													google
												</div>
												<div
													class="relative hover:text-purple-600 duration-300 cursor-pointer h-auto w-auto text-gray-400"
												>
													facebook
												</div>
												<div
													class="relative hover:text-purple-600 duration-300 cursor-pointer h-auto w-auto text-gray-400"
												>
													linkedIn
												</div>
											</div>
										</div>
										<div
											class="relative h-auto xl:w-1/2 lg:w-1/2 md:w-1/2 w-full"
										>
											<div
												class="relative h-auto w-full"
												style="transform: rotateY(180deg)"
											>
												<svg
													class="h-[300px] w-full"
													viewBox="0 0 654.23657 682.11354"
												>
													<path
														d="M892.88171,744.55677c0,25.68-138.79,46.5-310,46.5s-310-20.82-310-46.5c0-18.18,69.57-33.93,170.96-41.57,41.81-3.16,89.05-4.93,139.04-4.93,20.55,0,40.63.3,60.05.87C785.40173,703.12678,892.88171,721.95673,892.88171,744.55677Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#3f3d56"
													/>
													<ellipse
														cx="270"
														cy="630.61354"
														rx="119"
														ry="14.5"
														opacity="0.1"
													/>
													<ellipse
														cx="269.5"
														cy="521.11354"
														rx="112.5"
														ry="120"
														fill="#3f3d56"
													/>
													<rect
														x="235"
														y="592.11354"
														width="70"
														height="64"
														fill="#b073d2"
													/>
													<polygon
														points="396.5 607.614 392.5 629.614 418.5 633.614 435.5 623.614 434.5 607.614 396.5 607.614"
														fill="#575a89"
													/>
													<path
														d="M538.38171,303.55677s-2,23-7,24,11,41,11,41h24l19-5-9-22s-12-16-3-29S538.38171,303.55677,538.38171,303.55677Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#a0616a"
													/>
													<path
														d="M538.38171,303.55677s-2,23-7,24,11,41,11,41h24l19-5-9-22s-12-16-3-29S538.38171,303.55677,538.38171,303.55677Z"
														transform="translate(-272.88171 -108.94323)"
														opacity="0.1"
													/>
													<path
														d="M488.38171,479.55677s-26,50-5,60,26,9,26,12-4,2-2,7-4,25,2,37,4,21,4,21,0,1,2,5,3,7,2,9-7,15-1,18,37,5,40,0-3-8,0-11,5-4,3-6-4-27-4-27,5-29,3-33-5-8-3-11,4-2,5-6,3-13,3-13l11-1,26,5s29,32,61,42c0,0,9,9,12,9s3,0,2,2-4,2-2,4,5-1,3,2-4,3-2,5-1,13-1,14-9,95-6,97,45,8,48,0-2-18-2-18,15-120,11-128-18-44-93-67c0,0-21-4-21-7s-2-22-6-23-27-2-27-2l-29,9-40-7Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#2f2e41"
													/>
													<path
														d="M523.38171,647.55677l-5,18s-4,29,1,36c3.92739,5.49834,10.93965,12.23063,23.94449,13.4122a16.07115,16.07115,0,0,0,16.77855-11.11774,5.00653,5.00653,0,0,0,.277-1.29446c0-2-3-26-3-26l-5-25-1-7Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#2f2e41"
													/>
													<path
														d="M669.38171,733.55677s-5-5-6,0-5,26,2,27,74,11,81,7,20-10,12-13-31-12-31-12-13-17-15-18-13,1-18,5S669.38171,733.55677,669.38171,733.55677Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#2f2e41"
													/>
													<circle
														cx="289.5"
														cy="184.61354"
														r="31"
														fill="#a0616a"
													/>
													<path
														d="M559.38171,363.55677l-12-13-13.30147-26s-9.69853-3-11.69853,2-38,21-38,21,9,84,5,92-11,40-5,43,34,0,43,4,35,4,42-1,9-9,16-6c5.95926,2.554,19.89075-84.761,23.90164-110.781a11.844,11.844,0,0,0-4.90807-11.50971c-8.97276-6.29384-25.13277-17.13965-27.99357-15.70925C572.38171,343.55677,559.38171,363.55677,559.38171,363.55677Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#575a89"
													/>
													<path
														d="M602.38171,359.55677h0a11.85952,11.85952,0,0,1,8.91063,10.19577l8.08936,72.80423s-20,43-30,14S602.38171,359.55677,602.38171,359.55677Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#575a89"
													/>
													<path
														d="M600.38171,449.55677l22-6s4,28,8,28-14,16-23,14-22-9-23-14,9-26,9-26Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#575a89"
													/>
													<path
														d="M538.98,306.92974c2.10792-4.648,1.74193-10.06966,3.48463-14.86653a17.72716,17.72716,0,0,1,26.95315-8.38071c2.24178,1.59841,4.48928,3.84417,7.22559,3.539,2.94671-.32859,5.575-3.61593,8.2842-2.41116,3.00277,1.33533,2.19174,6.71676,5.23391,7.95972,1.6013.65426,3.49355-.35311,4.41715-1.8157a11.2246,11.2246,0,0,0,1.28583-4.97622c.41976-4.26508.79909-8.779-1.05062-12.64493a30.28893,30.28893,0,0,1-2.02829-4.08992,13.99385,13.99385,0,0,1-.38561-4.03439c-.01689-5.01309-.38281-10.24215-2.90568-14.57417-2.79955-4.80711-7.97447-7.881-13.37326-9.22227s-11.055-1.13561-16.59807-.66635c-9.16324.77574-18.71927,2.43858-25.93856,8.135a10.14728,10.14728,0,0,0-2.49336,2.61953,13.525,13.525,0,0,0-1.32811,3.84148,79.44958,79.44958,0,0,1-6.96764,18.27716,39.65627,39.65627,0,0,0-3.59543,7.76544c-.76559,2.75442-.71387,5.89343.8887,8.26085,1.30475,1.92745,3.39065,2.95463,5.02945,4.53044,1.62387,1.56146,2.38368,4.56438,4.18252,5.74673,1.57033,1.03215,3.4513.30356,5.0529,1.39752C536.40966,302.72479,536.55818,305.80443,538.98,306.92974Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#2f2e41"
													/>
													<path
														d="M564.38171,378.55677l3-6s44,13,53,25c0,0,22-14,34-12l12,2-37,33-47-4Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#f2f2f2"
													/>
													<path
														d="M562.38171,372.55677l-41,57,59,29s5.51572,3,9.75786,0l39.24214-18,37-53-37,19s-4-8-12-4Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#b073d2"
													/>
													<path
														d="M625.38171,473.55677l8-21s18-23,8-34-21,32-21,32Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#a0616a"
													/>
													<path
														d="M533.07939,470.20556l17.45624-14.152s27.11-10.865,23.97851-25.39746-34.22053,17.14513-34.22053,17.14513Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#a0616a"
													/>
													<path
														d="M489.88171,369.05677h-1s-15.5-18.5-18.5,6.5-13,108,13,111,44.5-12.5,44.5-12.5,19-29,12-29c-3.38691,0-12.59835-1.52116-21-1-8.96272.556-17.01615,3.08078-16.5.5C503.38171,439.55677,517.88171,376.05677,489.88171,369.05677Z"
														transform="translate(-272.88171 -108.94323)"
														opacity="0.1"
													/>
													<path
														d="M488.38171,349.55677l-4-2s-16,3-19,28-13,108,13,111,61-4,61-4,7-38,0-38-43,5-42,0S516.38171,356.55677,488.38171,349.55677Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#575a89"
													/>
													<polygon
														points="338 353.114 349.027 336.213 356 364.114 338 372.114 338 353.114"
														fill="#575a89"
													/>
													<circle
														cx="111.47314"
														cy="85.11354"
														r="27"
														fill="#f2f2f2"
													/>
													<rect
														x="79.47314"
														y="286.11354"
														width="64"
														height="64"
														fill="#f2f2f2"
													/>
													<polygon
														points="372 0 388.199 28.057 404.397 56.114 372 56.114 339.603 56.114 355.801 28.057 372 0"
														fill="#f2f2f2"
													/>
													<path
														d="M927.11829,277.17226q-.58078,17.95539-8.74513,28.78352-8.16571,10.82931-19.40145,10.83029-9.15176,0-16.04242-10.59861-6.89283-10.5984-6.892-32.60592,0-4.8648.23169-9.26642.23089-4.40064.57921-8.33968l4.05409-38.108H854.14538Q847.196,290.14515,842.73627,303.871q-4.46013,13.72556-15.11568,13.726a12.78019,12.78019,0,0,1-8.57155-3.59073,12.06434,12.06434,0,0,1-4.0541-9.4983q0-5.326,8.3976-14.884,8.39721-9.55611,9.32434-17.43233l6.94976-54.32423H828.43149a19.9108,19.9108,0,0,0-9.09265,2.25854,17.15586,17.15586,0,0,0-6.54451,5.27024l-4.98084,7.41313H803.7594q5.67412-17.6052,13.95764-26.46706,8.28-8.86106,19.05393-8.861H925.2652v20.38611H895.381q-1.39011,13.89963-2.14289,27.799-.75455,13.89963-.75278,27.9151,0,9.499,4.40162,15.40548,4.40064,5.90738,11.00386,5.90718,4.05312,0,8.51344-3.30132a11.97,11.97,0,0,0,5.03856-8.62908q.34754-2.54667.52109-3.99618.17377-1.44695.174-1.79536Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#b073d2"
													/>
													<path
														d="M927.11829,277.17226q-.58078,17.95539-8.74513,28.78352-8.16571,10.82931-19.40145,10.83029-9.15176,0-16.04242-10.59861-6.89283-10.5984-6.892-32.60592,0-4.8648.23169-9.26642.23089-4.40064.57921-8.33968l4.05409-38.108H854.14538Q847.196,290.14515,842.73627,303.871q-4.46013,13.72556-15.11568,13.726a12.78019,12.78019,0,0,1-8.57155-3.59073,12.06434,12.06434,0,0,1-4.0541-9.4983q0-5.326,8.3976-14.884,8.39721-9.55611,9.32434-17.43233l6.94976-54.32423H828.43149a19.9108,19.9108,0,0,0-9.09265,2.25854,17.15586,17.15586,0,0,0-6.54451,5.27024l-4.98084,7.41313H803.7594q5.67412-17.6052,13.95764-26.46706,8.28-8.86106,19.05393-8.861H925.2652v20.38611H895.381q-1.39011,13.89963-2.14289,27.799-.75455,13.89963-.75278,27.9151,0,9.499,4.40162,15.40548,4.40064,5.90738,11.00386,5.90718,4.05312,0,8.51344-3.30132a11.97,11.97,0,0,0,5.03856-8.62908q.34754-2.54667.52109-3.99618.17377-1.44695.174-1.79536Z"
														transform="translate(-272.88171 -108.94323)"
														opacity="0.1"
													/>
													<path
														d="M927.11829,273.55326q-.58078,17.95539-8.74513,28.78352-8.16571,10.82931-19.40145,10.83029-9.15176,0-16.04242-10.5986-6.89283-10.59841-6.892-32.60593,0-4.8648.23169-9.26642.23089-4.40064.57921-8.33967l4.05409-38.10806H854.14538Q847.196,286.52615,842.73627,300.252q-4.46013,13.72557-15.11568,13.726a12.78019,12.78019,0,0,1-8.57155-3.59073,12.06432,12.06432,0,0,1-4.0541-9.49829q0-5.326,8.3976-14.884,8.39721-9.55612,9.32434-17.43233l6.94976-54.32424H828.43149a19.9108,19.9108,0,0,0-9.09265,2.25854,17.15586,17.15586,0,0,0-6.54451,5.27024l-4.98084,7.41314H803.7594q5.67412-17.60522,13.95764-26.46706,8.28-8.86107,19.05393-8.861H925.2652v20.38611H895.381q-1.39011,13.89963-2.14289,27.79906-.75455,13.89962-.75278,27.91509,0,9.499,4.40162,15.40548,4.40064,5.90738,11.00386,5.90718,4.05312,0,8.51344-3.30132a11.97,11.97,0,0,0,5.03856-8.62908q.34754-2.54667.52109-3.99617.17377-1.447.174-1.79537Z"
														transform="translate(-272.88171 -108.94323)"
														fill="#b073d2"
													/>
												</svg>
											</div>
										</div>
									</div>
								</div>
								<div class="relative w-full content" id="webDevelopment">
									<div class="relative w-full h-auto grid gap-4">
										<div class="relative h-auto w-full py-10 grid gap-6">
											<div class="absolute top-0 left-0 w-full h-full">
												<div
													class="relative h-full w-full flex justify-between"
												>
													<div class="relative h-auto w-auto">
														<div
															class="relative h-[100px] w-[100px] bg-gray-200"
														>
															<div
																class="relative h-[60px] w-[60px] bg-purple-400 top-[100px] left-[100px]"
															></div>
														</div>
													</div>
													<div class="relative h-auto w-auto">
														<div
															class="relative h-[100px] w-[100px] bg-gray-200"
														>
															<div
																class="relative h-[60px] w-[60px] bg-purple-400 top-[100px] right-[100px]"
															></div>
														</div>
													</div>
												</div>
											</div>
											<div class="relative h-auto w-full grid gap-6">
												<div class="relative h-auto w-full grid gap-3">
													<div
														class="relative text-5xl font-extrabold text-center"
													>
														The New Kind of
													</div>
													<div
														class="relative text-5xl font-extrabold text-center"
													>
														Web Development
													</div>
												</div>
												<div
													class="relative h-auto w-3/5 text-center mx-auto font-medium"
												>
													Lorem ipsum dolor sit amet consectetur adipisicing
													elit. Placeat delectus reprehenderit perferendis,
													distinctio quasi itaque nemo accusantium, expedita
													eaque quisquam mollitia eum voluptate quibusdam libero
													quis illo quod optio sequi.
												</div>
											</div>
										</div>
									</div>
									<div class="relative h-[200px] w-full px-16">
										<div
											class="relative h-full w-full"
											style="
												background: url(./photos/webdevelopment.jpg);
												background-size: cover;
												background-position: center;
												background-repeat: no-repeat;
											"
										></div>
									</div>
								</div>
								<div class="relative w-full content" id="location">
									<div class="relative h-auto w-full text-center grid gap-6">
										<div class="relative h-auto w-full text-center grid gap-2">
											<div
												class="relatice h-auto w-auto text-md font-xs text-purple-500 uppercase"
											>
												My Location
											</div>
											<div
												class="relative h-auto w-auto text-3xl font-extrabold"
											>
												This is where I am.
											</div>
											<div class="relative h-auto w-3/5 text-gray-600 mx-auto">
												Lorem ipsum dolor sit amet consectetur adipisicing elit.
												Asperiores totam, labore accusamus velit odit ut
												quisquam iusto dicta, sint fuga, sequi molestiae minima!
												Maiores maxime eius assumenda in temporibus saepe.
											</div>
										</div>
										<div
											class="relative h-[300px] w-full flex items-center justify-center"
										>
											<img
												class="relative h-full imgContainer"
												src="./photos/map.png"
											/>
										</div>
									</div>
								</div>
								<div class="relative w-full content" id="profile">
									<div
										class="relative h-auto w-full flex justify-between items-center py-16 flex-wrap"
									>
										<div
											class="relative h-auto xl:w-1/2 lg:w-1/2 md:w-1/2 w-full xl:block lg:block md:block hidden"
										>
											<svg
												class="h-[200px] w-[200px] scale-[2]"
												viewBox="0 0 786.81995 572.25773"
											>
												<circle
													cx="458.32136"
													cy="74.18162"
													r="26.70075"
													fill="#f2f2f2"
												/>
												<path
													d="M872.03753,661.02307c39.6877-30.22889,58.64352-81.02546,46.77635-129.48234q-.44231-1.806-.93367-3.6038c-7.86742-28.76343-27.33167-56.10058-55.7-65.29129-23.81971-7.71694-49.81962-1.78274-74.66936-4.85149-48.78136-6.02417-86.60057-45.494-113.21115-86.81933-26.61064-41.32546-47.06182-87.58331-82.42157-121.72413-58.28479-56.27536-153.36192-68.39149-225.62671-31.76044C293.98673,254.12142,247.95487,335.39062,249.918,416.38554c1.96322,80.995,50.04632,158.43176,119.87492,199.517,25.65222,15.093,55.32138,25.78522,84.84826,22.04377,25.62011-3.24641,48.89908-17.01264,74.39861-21.09959,40.09115-6.42568,79.92687,11.70084,114.60268,32.82375,34.67571,21.12288,68.17007,46.15988,107.57436,55.95242C789.47831,715.13139,836.88051,687.80109,872.03753,661.02307Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#f2f2f2"
												/>
												<path
													d="M815.016,219.19108c-.87006-.58-1.75-1.13-2.62006-1.69a380.24008,380.24008,0,0,0-80.31-38.93l-6.54,90.22h-41.46v-103.39c-2.61-.54-5.24-1.05-7.87-1.53v104.92H626.94587A102.26992,102.26992,0,0,1,524.67595,166.5212v-.0001c-2.64.57-5.26,1.18-7.88,1.83v100.44h-40.13l-6.23-86.03a380.8581,380.8581,0,0,0-81.94,43.53c-.44.3-.88.61-1.31.91-2.21,1.55-4.39,3.13-6.56,4.73v344.19h118.27l-2.09-28.95-11.5-158.95h231.59l-11.5,158.95-2.09,28.95h116.96v-353.45Q817.65591,220.90114,815.016,219.19108Zm-298.22,142.78h-33.39l-6.17-85.3h39.56Zm159.42,0h-56.08v-1.69a6.17975,6.17975,0,0,0-6.19-6.18h-24.38a6.17757,6.17757,0,0,0-6.18,6.18v1.69h-58.71v-85.3h151.54Zm7.87,0v-85.3h40.89l-6.17,85.3Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<path
													d="M206.59,598.16193a289.0029,289.0029,0,0,0,28.12,28.95l730.58,1a289.0029,289.0029,0,0,0,28.12-28.95Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<path
													d="M702.01993,505.46245v85.704a4.12233,4.12233,0,0,0,4.11906,4.11907H833.14348a4.12232,4.12232,0,0,0,4.11907-4.11907v-85.704a4.12433,4.12433,0,0,0-4.11907-4.11452H706.139A4.12434,4.12434,0,0,0,702.01993,505.46245Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<path
													d="M704.99939,506.52881V590.1092a2.20523,2.20523,0,0,0,2.20141,2.20141H832.08626a2.20522,2.20522,0,0,0,2.20141-2.20141V506.52881a2.20621,2.20621,0,0,0-2.20141-2.206H707.2008A2.20623,2.20623,0,0,0,704.99939,506.52881Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#a16cda"
												/>
												<path
													d="M699.36376,607.881a2.46985,2.46985,0,0,0,1.94346.92984H837.29917a2.5024,2.5024,0,0,0,2.44606-3.0157l-2.111-10.02722a2.50694,2.50694,0,0,0-1.55811-1.81784,2.42467,2.42467,0,0,0-.888-.1675H703.40985a2.42446,2.42446,0,0,0-.888.1675,2.50671,2.50671,0,0,0-1.55811,1.81784l-2.111,10.02722A2.5005,2.5005,0,0,0,699.36376,607.881Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#2f2e41"
												/>
												<rect
													x="830.03379"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1457.66604 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="821.65681"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1440.91208 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="813.27982"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1424.15811 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="804.90284"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1407.40415 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="796.52586"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1390.65018 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="788.14888"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1373.89622 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="779.7719"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1357.14226 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="771.39491"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1340.38829 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="763.01793"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1323.63433 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="754.64095"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1306.88037 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="746.26397"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1290.1264 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="737.88699"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1273.37244 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="729.51001"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1256.61847 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="721.13302"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1239.86451 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="712.75604"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1223.11055 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="704.37906"
													y="595.58843"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1206.35658 1029.81882) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="830.13277"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1457.86401 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="821.75579"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1441.11005 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="813.37881"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1424.35608 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="805.00183"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1407.60212 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="796.62485"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1390.84816 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="788.24786"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1374.09419 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="779.87088"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1357.34023 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="771.4939"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1340.58627 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="763.11692"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1323.8323 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="754.73994"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1307.07834 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="746.36295"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1290.32437 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="737.98597"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1273.57041 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="729.60899"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1256.81645 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="721.23201"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1240.06248 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="712.85503"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1223.30852 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="704.47805"
													y="599.77692"
													width="4.18849"
													height="2.51309"
													rx="0.48819"
													transform="translate(1206.55456 1038.1958) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="760.60382"
													y="604.80311"
													width="33.50793"
													height="2.51309"
													rx="0.48819"
													transform="translate(1348.12555 1048.24818) rotate(-180)"
													fill="#3f3d56"
												/>
												<rect
													x="515.63106"
													y="358.73707"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="548.15407"
													y="358.73707"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="557.36892"
													y="358.73707"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="524.47742"
													y="358.4768"
													width="20.79613"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="567.84144"
													y="358.4768"
													width="20.79613"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="524.30386"
													y="365.78373"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="556.82687"
													y="365.78373"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="566.04172"
													y="365.78373"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="533.15023"
													y="365.52345"
													width="20.79613"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="576.51424"
													y="365.52345"
													width="20.79613"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="532.97666"
													y="372.83038"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="565.49967"
													y="372.83038"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="574.71453"
													y="372.83038"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="541.82303"
													y="372.57011"
													width="20.79613"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="585.18704"
													y="372.57011"
													width="20.79613"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="541.64947"
													y="379.87703"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="574.17248"
													y="379.87703"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="583.38733"
													y="379.87703"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="550.49583"
													y="379.61676"
													width="20.79613"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="548.15407"
													y="407.89751"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="557.36892"
													y="407.89751"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="567.84144"
													y="408.15779"
													width="20.79613"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="515.63106"
													y="407.89751"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="524.47742"
													y="408.15779"
													width="20.79613"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="524.30386"
													y="400.85086"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="556.82687"
													y="400.85086"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="566.04172"
													y="400.85086"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="533.15023"
													y="401.11113"
													width="20.79613"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="532.97666"
													y="393.80421"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="565.49967"
													y="393.80421"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="574.71453"
													y="393.80421"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="541.82303"
													y="394.06448"
													width="20.79613"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="541.64947"
													y="386.75755"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="574.17248"
													y="386.75755"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="583.38733"
													y="386.75755"
													width="5.96585"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<rect
													x="550.49583"
													y="387.01783"
													width="20.79613"
													height="3.12216"
													rx="1.56108"
													fill="#fff"
												/>
												<path
													d="M711.50727,654.35273l-13.34954-21.10162,41.902-33.40283,17.29534-19.16107a19.16138,19.16138,0,0,1,32.418,6.8279h0a19.16136,19.16136,0,0,1-11.57015,23.991l-27.3488,10.07535Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#ffb6b6"
												/>
												<path
													d="M398.28,501.35193v102.56h71.85v-102.56a3.448,3.448,0,0,0-2.43-3.3,3.1749,3.1749,0,0,0-1.03-.16H401.75A3.46328,3.46328,0,0,0,398.28,501.35193Zm28.04,35.24a7.67033,7.67033,0,0,1,15.34,0v11.9a7.6701,7.6701,0,0,1-15.34,0Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#2f2e41"
												/>
												<path
													d="M398.06006,600.632v9.89a1.94622,1.94622,0,0,0,1.93,1.94h68.43a1.93972,1.93972,0,0,0,1.93-1.94v-9.89Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<path
													d="M285.25,346.832V534.09192a9.00714,9.00714,0,0,0,9,9h277.5a9.0071,9.0071,0,0,0,9-9V346.832a9.01147,9.01147,0,0,0-9-8.99H294.25A9.01151,9.01151,0,0,0,285.25,346.832Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<path
													d="M291.76,349.16193v182.62a4.81833,4.81833,0,0,0,4.81,4.81H569.44a4.81829,4.81829,0,0,0,4.81-4.81v-182.62a4.82047,4.82047,0,0,0-4.81-4.82H296.57A4.82051,4.82051,0,0,0,291.76,349.16193Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#fff"
												/>
												<path
													d="M342.4,611.79193a2.9484,2.9484,0,0,0,2.32,1.11h162.34a2.98725,2.98725,0,0,0,2.92-3.6l-2.52-11.97a2.99264,2.99264,0,0,0-1.86-2.17,2.89454,2.89454,0,0,0-1.06-.19995H347.23a2.8943,2.8943,0,0,0-1.06.19995,2.99239,2.99239,0,0,0-1.86,2.17l-2.52,11.97A2.985,2.985,0,0,0,342.4,611.79193Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#2f2e41"
												/>
												<path
													d="M560.58451,369.49866H305.26115a1.0156,1.0156,0,0,1,0-2.0307H560.58451a1.0156,1.0156,0,0,1,0,2.0307Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<ellipse
													cx="116.05131"
													cy="192.32963"
													rx="5.95043"
													ry="6.08304"
													fill="#3f3d56"
												/>
												<ellipse
													cx="136.60733"
													cy="192.32963"
													rx="5.95043"
													ry="6.08304"
													fill="#3f3d56"
												/>
												<ellipse
													cx="157.16336"
													cy="192.32963"
													rx="5.95043"
													ry="6.08304"
													fill="#3f3d56"
												/>
												<path
													d="M548.20637,351.622h-14.6a1.1053,1.1053,0,0,0,0,2.21h14.6a1.10511,1.10511,0,0,0,0-2.21Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<path
													d="M548.20637,355.772h-14.6a1.10527,1.10527,0,0,0,0,2.21h14.6a1.10508,1.10508,0,0,0,0-2.21Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<path
													d="M548.20637,359.92194h-14.6a1.1053,1.1053,0,0,0,0,2.21h14.6a1.10511,1.10511,0,0,0,0-2.21Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<path
													d="M900.18575,604.97238a6.41621,6.41621,0,0,0,6.1831,4.331l26.49183-.68178a6.3285,6.3285,0,0,0,5.98085-4.657l3.74888-40.08721a9.79409,9.79409,0,0,0,4.23793.87079,9.66133,9.66133,0,1,0-.4849-19.31658,8.18393,8.18393,0,0,0-1.73618.18056,6.54764,6.54764,0,0,0-4.87405-2.103l-40.75051,1.05229a5.85294,5.85294,0,0,0-1.00519.1248,6.36455,6.36455,0,0,0-4.87318,8.26464Zm43.17345-43.81684,2.66764-9.55274a6.50649,6.50649,0,0,0,.02036-3.37458c.12944-.00034.24363-.06169.37307-.062a6.91049,6.91049,0,0,1,.32357,13.81714A6.50527,6.50527,0,0,1,943.3592,561.15554Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#2f2e41"
												/>
												<path
													d="M897.97751,544.68623c.86818,4.96412,10.62909,8.45387,22.36585,7.84729,10.79271-.49726,19.61745-4.287,21.23421-8.7785a6.02511,6.02511,0,0,0-1.84436-.24588l-40.75051,1.05229A5.85294,5.85294,0,0,0,897.97751,544.68623Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<path
													d="M922.49438,582.94415a.49659.49659,0,0,0,.15091-.06642l5.75315-3.76566a.49923.49923,0,0,0,.00032-.83621l-5.97978-3.91667a.49972.49972,0,1,0-.54792.83585l5.34091,3.49818-5.114,3.34794a.49991.49991,0,0,0,.39637.903Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#a16cda"
												/>
												<path
													d="M913.40762,583.36319a.5.5,0,0,0,.12608-.91842l-5.30306-3.04034,5.1256-3.80723a.49963.49963,0,1,0-.596-.80208l-5.73862,4.26265a.49951.49951,0,0,0,.04918.83476l5.96525,3.41968A.4997.4997,0,0,0,913.40762,583.36319Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#a16cda"
												/>
												<path
													d="M921.92215,586.24416a.48233.48233,0,0,0,.137-.05785.49976.49976,0,0,0,.16752-.68714l-8.15548-13.40836a.50026.50026,0,0,0-.85442.52058l8.15548,13.40835A.50035.50035,0,0,0,921.92215,586.24416Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#a16cda"
												/>
												<rect
													x="209.38454"
													y="260.82713"
													width="50.71916"
													height="10.8457"
													rx="3.26417"
													fill="#a16cda"
												/>
												<rect
													x="183.62601"
													y="282.51852"
													width="102.23622"
													height="10.8457"
													rx="3.26417"
													fill="#e6e6e6"
												/>
												<rect
													x="183.62601"
													y="304.20991"
													width="102.23622"
													height="10.8457"
													rx="3.26417"
													fill="#e6e6e6"
												/>
												<path
													d="M497.30123,540.717l.21675.68444.01142.02283,6.52515,19.838,7.50627,22.86094,14.1227,42.96133.13688,6.67346v.02283l1.04949,53.6845-2.90894,7.2781,3.274,11.93237s-1.50582-18.037-9.5824-7.67884c-4.57448,5.8864-9.92468,11.90961-14.31668,17.55642q9.59964,3.88436,19.50716,7.0271c1.426.45633,2.86334.88983,4.30071,1.32333q.46194.13692.924.27377a266.86342,266.86342,0,0,0,67.35086,10.82587c1.18637.03425,2.35.057,3.47932.07986.39932.01142.78714.02284,1.175.02284,1.27765.01142,2.54389.02277,3.82154.02277q3.86721,0,7.70018-.11405a266.85337,266.85337,0,0,0,56.09149-7.58613c-.12547-7.58606-.46768-16.44984-.9582-25.91819-.22817-4.64293-5.3502-9.67369-5.65823-14.53336-.21675-3.65047,4.38057-7.08419,4.141-10.79169-1.55143-22.82675-3.49075-14.06417-4.92813-30.22882q-.22245-2.37852-.41066-4.55165c-.924-10.381-1.56284-16.872-1.56284-16.872l6.13733-38.68338,9.6395-60.73442-.74153-1.22063-.83274-.41066-50.844-25.16532-2.76064-7.07276a10.97881,10.97881,0,0,0-10.14143-6.94731l-33.4929-.13688a10.93117,10.93117,0,0,0-8.90946,4.52888l-9.069,12.55978Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<path
													d="M533.40653,617.52479,525.8204,633.758l-5.179,11.08822-8.90939,46.646-4.46044,4.73414L503.45,679.467l-39.99772,8.88094c-1.31191-7.28951-.3512.24662-1.16117-7.75009.22817-.22817.46768-.45634.70727-.68451.63882-.59322,1.175-1.15218,1.1636-1.68831-.45633-27.58374.9126-74.52633,12.34311-102.96564a60.05328,60.05328,0,0,1,7.02709-13.1074c.22817-.308.44492-.61606.66167-.924,5.27034-7.3808,8.60136-14.64748,13.32415-19.81511v-.01142a.53028.53028,0,0,0,.07986-.07987.157.157,0,0,0,.04561-.03425l32.44341-17.20272,1.39177,39.10546.99247,28.10851Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<path
													d="M650.3914,622.13549l9.476,20.275,3.30742,7.06091,8.90681,46.64162,4.44575,4.72264,3.83039-16.75524,1.7998-.36918,32.4585-6.72243,9.46058,30.04631a17.984,17.984,0,0,0-3.26122-22.50556c-.64606-.58457-1.18444-1.15373-1.16913-1.69211.53847-32.4431-1.446-91.68363-19.36733-116.06588-5.69179-7.73777-9.1068-15.44474-14.07562-20.82885-.0154-.0153-.0154-.0307-.03071-.0307L674.0814,526.1139l-.73836-1.21533-.83066-.41528Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#3f3d56"
												/>
												<circle
													id="a657ec4b-47ce-4d2a-9c58-81a811696ca9"
													data-name="Ellipse 5"
													cx="386.3965"
													cy="267.20052"
													r="44.55826"
													fill="#ffb6b6"
												/>
												<path
													d="M653.21227,399.94791a3.75933,3.75933,0,0,0-2.69-1.19l.67-1.86a3.52769,3.52769,0,0,0-3.96-4.7l-2.44.47.23-1.63a3.53387,3.53387,0,0,0-4.73-3.82,3.76631,3.76631,0,0,1-3.24-.23,3.84647,3.84647,0,0,1-1.92-2.61005l-.85-4.1-.09-.22c-4.14-6.9-12.1-11.92-21.84-13.76-8.67005-1.65-17.56-.81-26.13-.02-3.4.32-7.24.68-10.44,2.64-2.72,1.68-5.02,5.04-4.55,8.43-8.45-2.59-17.51,2.58-22,9.1-5.32,7.76-6.19,17.48-6.33,25.08-.38,17.98,3.33,32.69,11,43.73.56.8.7,2.47,1.81,3.03l-.23-.37c1.24.62,2.5,1.62,2.03,2.69-1.35,3.08,7.62,9.89,13.94,12.14,11.53,4.11,26.86,3.76,37.64,2.28l.38-2.55c3.89-.53,6.63-1.54,7.4-3.12,1.36005-1.16,2.52-2.2,3.53-3.16l.01-.01c.02-.02.06-.05.08-.07,4.87-4.67,6-7.32995,6.51-11.37994.49-3.97-.38-8-1.27-11.63,18.74,2.9-7.38-19.96,10.08-24.38a5.434,5.434,0,0,1,.61-.15c.51-.12,1.02-.24,1.51-.38a26.44846,26.44846,0,0,0,6.72-2.87c4.88-2.97,6.49-6.91,9.01-11.35A3.42652,3.42652,0,0,0,653.21227,399.94791Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#2f2e41"
												/>
												<path
													d="M750.58227,625.3079c-.01,1.75-.03,4.2-.11,7.23q-.015.63-.03,1.29c-.13,5.57-.26,10.24-.47,15.43-.01.36-.02.71-.04,1.07-.28,7.24-.72,15.67-1.48,29.02-1.41,24.66-3.87,3.39-6.34,12.04-.12.43-.25.94-.37,1.54a27.91582,27.91582,0,0,1-1.88,6.33c-1.31.78-2.66,1.53-3.99,2.28-3.79,2.11-7.63995,4.13995-11.51995,6.07-2.18006,1.08-4.37,2.14-6.57,3.16-.35.16-.69.32-1.03.47a270.88715,270.88715,0,0,1-34.75,13.26c-2.32.7-4.63,1.38-6.97,2.01-2.44.68-4.88,1.32-7.35,1.92a266.8933,266.8933,0,0,1-56.09,7.59c-2.55.08-5.12.11-7.7.11-1.28,0-2.54-.01-3.82-.02-.39,0-.78-.01-1.17-.02-1.13-.03-2.3-.05-3.48-.08a266.66307,266.66307,0,0,1-67.35-10.83l-.93-.27c-1.44-.44-2.87-.87-4.3-1.33q-9.90006-3.135-19.51-7.02-7.335-2.955-14.5-6.34a.33861.33861,0,0,1-.12-.06c-1-.46-2.01-.94-3.01-1.43-.13-.07-.27-.14-.41-.21q-5.59506-2.73-11.07-5.72c-3.07-7.05005-7.39-8.4-10.07-14.6a25.87356,25.87356,0,0,1-1.68-5.74c0-.02-.01-.04-.01-.07.28,3.72-1.19-6.6-.01-.04-.01-.12-.02-.25-.03-.4-.03-.36-.06994-.8-.12994-1.35-3.43-33.49-3.21-71.79-4.7-103.35q-.15006-3.06-.31-5.86c-.03-.62-.07-1.23-.11005-1.83.07-.18.15-.37.24-.55a1.002,1.002,0,0,1,.07-.15,1.62294,1.62294,0,0,1,.1-.18c.02-.03.05-.07.07-.1a.91693.91693,0,0,1,.05-.1c.09-.14.19-.29.3-.43.05-.06.09-.11005.14-.16a.80824.80824,0,0,1,.12-.14.637.637,0,0,1,.11-.13c.04-.04.08-.09.13-.13995a.30159.30159,0,0,1,.08-.08,2.03313,2.03313,0,0,1,.26-.25,9.62387,9.62387,0,0,1,1.14-.9c.13995-.09.29-.18.43-.28a19.13528,19.13528,0,0,1,3.17-1.52c.38-.14.76-.27,1.17-.41.15-.04.29-.09.44-.14.22-.07.44-.14.67-.19,1.14-.34,2.37-.63,3.7-.9.16-.03.33-.06.5-.1.24-.05.49-.09.74-.13.34-.06.69-.12,1.04-.18,2.97-.47,6.34-.82,10.06-1.05q.525-.03,1.05-.06c.41-.02.82-.04,1.24-.06.35-.02.71-.03,1.07-.04.35-.02.71-.03,1.08-.04,1.01-.03,2.05-.06,3.11-.08,3.02-.06,6.2-.04,9.54.03,1.55.04,3.13.08,4.75.15.11005,0,.21.01.31.01,1.41.05,2.83.11,4.29.19,1.02.05,2.05.1,3.07995.16.97.06,1.95.12,2.94.19.77.04,1.54.1,2.32.15.66.05,1.32.1,1.98.14l.9.06c.49.04.98.07,1.48.12,1.1.09,2.2.18,3.32.27,1.11.1,2.24.2,3.37.3s2.27.21,3.41.32c.12.01.23.02.34.03,1.04.11005,2.08.21,3.13.32.24.02.49.04.73.07,1.0011.10058,2.02173.21832,3.032.32568.31006.03345.61847.06586.92944.09985.79139.08618,1.57154.16089,2.36847.25446,1.05.12,2.12006.23,3.16.37.81.09,1.62.18,2.43.28,1.27.15,2.56.31,3.85.48.49.06.98.12,1.47.19,3.68.46,7.4.97,11.18,1.5,5.73.81,11.55,1.69,17.41,2.64q8.80509,1.425,17.71,3.01c1.5.27,3,.54,4.51.82q1.02.19491,2.04.38995c1.16.21,2.32.43,3.48.65,1.16.22,2.32.44,3.48.67,1.38.27,2.77.54,4.15.81,9.09,1.8,18.12994,3.72,26.95,5.73,1.45.32995,2.9.67,4.34,1q4.32,1.005,8.56,2.04c.78.18,1.55.37,2.32.56,1.92.48,3.84.96,5.73,1.45l.33.09c1.39.34,2.75.69,4.11,1.05q4.815,1.26,9.47,2.55,3.09.855,6.11,1.73c3.01.87,5.96,1.75,8.83,2.64.71.22,1.42.44,2.12.65,2.1.65,4.17,1.31,6.18,1.97,1.6.52,3.16,1.05,4.7,1.58q2.31.795,4.53,1.59c.95.34,1.89.7,2.83,1.04,1.35.5,2.68,1,3.98,1.5.4.15.79.31,1.18.46.25.11.49.2.73.3.47.19.95.37,1.41.56.47.18.93.37,1.39.57.45.18.91.37,1.35.56.45.18.89.37,1.33.57.37.15.73.31,1.08.47.71.31,1.42.62,2.11.94.34.16.68.31,1.02.47l.78.36c.11.06.22.11.33.16.25.12.51.25.76.37.57995.27,1.15.56,1.71.83.75.38,1.48.76,2.18,1.13.71.37994,1.4.76,2.06,1.12994.11.06.21.12006.32.18006.15.07995.3.17.45.25.51.29,1,.59,1.49.87994.96.59,1.87,1.17,2.72,1.75.19.13.37.26.56.38.63.45,1.23.89,1.79,1.34,0,.01,0,.01.01.01.19.14.37.29.55.43.15.14.31.26.46.4.52.45,1,.87994,1.44,1.32a5.667,5.667,0,0,1,.42.43,1.20839,1.20839,0,0,1,.16.16c.2.2.38.4.55.6a.55257.55257,0,0,1,.07.09c.24.28.46.56.67.84.1.14.21.28.3.42.12.17.24.35.34.52.09.14.17.29.25.43006a7.2566,7.2566,0,0,1,.54,1.12994,5.2413,5.2413,0,0,1,.27.82A5.84442,5.84442,0,0,1,750.58227,625.3079Z"
													transform="translate(-206.59003 -163.87113)"
													fill="#2f2e41"
												/>
												<path
													d="M750.58227,625.3079c-.01,1.75-.03,4.2-.11,7.23-.01.42-.03.85-.04,1.29-.1,4.25-.25,9.5-.46,15.43-.01.36-.02.71-.04,1.07-.28,7.24-.72,15.67-1.48,29.02-1.41,24.66-3.87,3.39-6.34,12.04-6.86-4.22-14.38-8.64-22.42-13.18q-2.175-1.23-4.39-2.47c-16.08-8.97-34.04-18.37006-52.79-27.68-.74-.37-1.49-.74-2.23-1.1-42.95-21.23-89.83-41.88-127.81-55.66-7.33-2.66-14.33-5.06-20.91-7.17005-13.86-4.43-25.84-7.53-35.06-8.87-9.6-1.4-16.23-.9-18.91,1.99q-.15006-3.06-.31-5.86-.06006-.93-.12-1.83c.06171-.16462.14191-.32172.21955-.48017.01111-.02313.019-.047.03045-.06982a1.002,1.002,0,0,1,.07-.15,1.62294,1.62294,0,0,1,.1-.18,1.05985,1.05985,0,0,1,.12-.2c.09-.14.19-.29.3-.43a3.48261,3.48261,0,0,1,.26-.30005.637.637,0,0,1,.11-.13c.04-.04.08-.09.13-.13995a.30159.30159,0,0,1,.08-.08,2.03313,2.03313,0,0,1,.26-.25,9.62387,9.62387,0,0,1,1.14-.9c.13995-.09.29-.18.43-.28a19.13528,19.13528,0,0,1,3.17-1.52c.38-.14.76-.27,1.17-.41.15-.04.29-.09.44-.14.22-.07.44-.14.67-.19,1.14-.34,2.37-.63,3.7-.9.4-.08.82-.16,1.24-.23.34-.06.69-.12,1.04-.18,2.97-.47,6.34-.82,10.06-1.05q.525-.03,1.05-.06c.41-.02.82-.04,1.24-.06.35-.02.71-.03,1.07-.04.35-.02.71-.03,1.08-.04,1.01-.03,2.05-.06,3.11-.08,3.02-.05,6.2-.03,9.54.04,1.55.03,3.13.08,4.75.15.1,0,.21.01.31.01,1.41.04,2.84.11,4.29.18,1.02.05,2.05.1,3.07995.16.97.06,1.95.12,2.94.19.77.04,1.54.1,2.32.15.66.05,1.32.1,1.98.14.79.06,1.58.12,2.38.18,1.1.09,2.2.18,3.32.27,1.11.1,2.24.2,3.37.3s2.27.21,3.41.32c.12.01.23.02.34.03,1.04.11005,2.08.21,3.13.32q8.73.885,17.97,2.07,5.52.705,11.18,1.51c5.73.81,11.55,1.69,17.41,2.63q8.80509,1.425,17.71,3.01c1.5.27,3,.54,4.51.82q2.76.50994,5.52,1.04c1.16.22,2.32.44,3.48.67,1.38.27,2.77.54,4.15.81,9.09,1.8,18.12994,3.72,26.95,5.73,1.45.32995,2.9.67,4.34,1q4.32,1.005,8.56,2.04c.78.19,1.55.38,2.32.57q2.895.72,5.73,1.44v.01c.11.02.22.05.33.08,1.38.35,2.75.7,4.11,1.06q4.815,1.26,9.47,2.54c2.06.57995,4.1,1.15,6.11,1.73,3.01.88,5.96,1.76,8.83,2.64.71.22,1.42.44,2.12.65q3.15.99,6.18,1.97c1.6.52,3.16,1.05,4.7,1.58q2.31.795,4.53,1.59c.96.34,1.9.69,2.83,1.03,1.36.5,2.68,1,3.98,1.51.4.15.79.31,1.18.46.73.28,1.44.57,2.14.86.47.18.93.37,1.39.57.45.18.91.37,1.35.56.45.18.89.37,1.33.57.37.15.73.31,1.08.47.71.31,1.42.62,2.11.94.34.16.68.31,1.02.47l.78.36c.11.06.22.11.33.16.85.4,1.67.8,2.47,1.2.75.38,1.48.76,2.18,1.13.83.43994,1.62.87,2.38,1.31.15.07995.3.17.45.25.51.29,1,.59,1.49.87994.96.59,1.87,1.17,2.72,1.75.84.58,1.62,1.15,2.35,1.72,0,.01,0,.01.01.01.35.28.69.56,1.01.83.52.45,1,.87994,1.44,1.32a5.667,5.667,0,0,1,.42.43,1.20839,1.20839,0,0,1,.16.16c.21.23.42.46.62006.69.24.28.46.56.67.84.1.14.21.28.3.42.12.17.24.35.34.52.09.14.17.29.25.43006a7.2566,7.2566,0,0,1,.54,1.12994,6.05312,6.05312,0,0,1,.27.82A5.84442,5.84442,0,0,1,750.58227,625.3079Z"
													transform="translate(-206.59003 -163.87113)"
													opacity="0.2"
												/>
											</svg>
										</div>
										<div
											class="relative h-auto xl:w-1/2 lg:w-1/2 md:w-1/2 w-full"
										>
											<div class="relative h-auto w-full grid gap-8">
												<div class="relative h-auto w-full grid gap-4">
													<div
														class="relative h-auto w-auto text-3xl font-extrabold text-gray-700 flex items-end gap-3"
													>
														<div class="relative">
															99
															<span class="absolute text-xl -mt-2 ml-1">+</span>
														</div>
														<div class="relative text-sm font-light ml-3">
															Hirers
														</div>
													</div>
													<div
														class="relative h-auto text-md font-light text-gray-600 w-[80%]"
													>
														Lorem ipsum dolor sit, amet consectetur adipisicing
														elit. Dicta omnis
													</div>
												</div>
												<div class="relative h-auto w-full grid gap-4">
													<div
														class="relative h-auto w-auto text-3xl font-extrabold text-gray-700 flex items-end gap-3"
													>
														<div class="relative">
															5
															<span class="absolute text-xl -mt-2 ml-1">+</span>
														</div>
														<div class="relative text-sm font-light ml-3">
															Languages
														</div>
													</div>
													<div
														class="relative h-auto text-md font-light text-gray-600 w-[80%]"
													>
														I can code with 5 languages including js, php and
														more
													</div>
												</div>
												<div class="relative h-auto w-full grid gap-4">
													<div
														class="relative h-auto w-auto text-3xl font-extrabold text-gray-700 flex items-end gap-3"
													>
														<div class="relative">2 year's</div>
														<div class="relative text-sm font-light ml-3">
															Experience
														</div>
													</div>
													<div
														class="relative h-auto text-md font-light text-gray-600 w-[80%]"
													>
														Lorem ipsum dolor sit amet consectetur adipisicing
														elit. Quaerat
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- contact -->
								<div
									class="relative w-full content contactContainer"
									id="contact"
								>
									<div class="relative h-full w-full grid gap-16">
										<div
											class="relative h-full flex items-center justify-center"
										>
											<div
												class="relative h-auto xl:w-1/2 lg:w-1/2 w-full xl:px-8 lg:px-8 md:px-16 sm:px-32 px-4"
											>
												<div class="relative w-full grid gap-4">
													<div class="relative text-3xl font-semibold">
														Send Messege
													</div>
													<div class="relative h-auto w-full grid gap-4">
														<div class="relative h-auto w-auto">
															Fill the required fields
														</div>
														<form
															action="index.php"
															method="POST"
															class="relative h-auto w-full grid gap-6"
														>
															<div class="h-auto w-full grid gap-6">
																<div class="h-auto w-full grid gap-2">
																	<div
																		class="relative h-auto w-auto text-xs font-extrabold text-gray-700"
																	>
																		Email
																	</div>
																	<div class="relative h-auto w-full">
																		<div
																			class="relative h-[45px] w-full bg-gray-100 rounded-md flex items-center"
																		>
																			<div class="relative h-auto w-[45px]">
																				<div
																					class="relative h-auto w-full flex items-center justify-center text-gray-800"
																				>
																					<svg
																						width="15"
																						height="15"
																						viewBox="0 0 24 24"
																						fill="none"
																						stroke="currentColor"
																						stroke-width="2"
																						stroke-linecap="round"
																						stroke-linejoin="round"
																					>
																						<path
																							d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
																						></path>
																						<circle
																							cx="12"
																							cy="7"
																							r="4"
																						></circle>
																					</svg>
																				</div>
																			</div>
																			<div
																				class="relative h-full w-[calc(100%-40px)]"
																			>
																				<input
																					type="email"
																					class="relative h-full w-full bg-transparent outline-none text-sm font-light inputField"
																					name="email"
																					placeholder="Enter your email"
																				/>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="h-auto w-full grid gap-2">
																	<div
																		class="relative h-auto w-auto text-xs font-extrabold text-gray-700"
																	>
																		Subject
																	</div>
																	<div class="relative h-auto w-full">
																		<div
																			class="relative h-[45px] w-full bg-gray-100 rounded-md flex items-center"
																		>
																			<div class="relative h-auto w-[45px]">
																				<div
																					class="relative h-auto w-full flex items-center justify-center text-gray-800"
																				>
																					<svg
																						width="15"
																						height="15"
																						viewBox="0 0 24 24"
																						fill="none"
																						stroke="currentColor"
																						stroke-width="2"
																						stroke-linecap="round"
																						stroke-linejoin="round"
																					>
																						<path
																							d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
																						></path>
																						<circle
																							cx="12"
																							cy="7"
																							r="4"
																						></circle>
																					</svg>
																				</div>
																			</div>
																			<div
																				class="relative h-full w-[calc(100%-40px)]"
																			>
																				<input
																					type="text"
																					class="relative h-full w-full bg-transparent outline-none text-sm font-light inputField"
																					name="subject"
																					placeholder="Enter Subject"
																				/>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="h-auto w-full grid gap-2">
																	<div
																		class="relative h-auto w-auto text-xs font-extrabold text-gray-700"
																	>
																		Messege
																	</div>
																	<div class="relative h-auto w-full">
																		<div
																			class="relative h-auto w-full bg-gray-100 rounded-md flex items-center"
																		>
																			<div class="relative h-full w-full">
																				<textarea
																					class="relative px-3 py-3 h-[150px] w-full bg-transparent outline-none text-sm font-light resize-none inputField textArea"
																					name="messege"
																				></textarea>
																				<span
																					class="levelOfTextArea absolute top-3 left-3 text-sm font-light text-gray-400"
																					>write your message</span
																				>
																			</div>
																		</div>
																	</div>
																</div>
																<input
																	type="submit"
																	name="submit"
																	class="absolute h-0 w-0 none realSubmitBtn"
																/>
																<div class="relative h-auto w-full">
																	<div
																		class="relative h-auto w-full flex items-center justify-between gap-4 capitalize"
																	>
																		<div
																			class="relative flex items-center justify-center cursor-pointer text-sm font-extrabold h-[40px] w-full bg-purple-500 text-white rounded-md submitBtn"
																			onclick="document.querySelector('.realSubmitBtn').click()"
																		>
																			submit
																		</div>
																	</div>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<div
												class="relative h-full w-1/2 py-16 xl:block lg:block hidden"
											>
												<div
													class="relative h-full w-full"
													style="
														background: url(./photos/message.jpeg);
														background-size: cover;
														background-position: center;
														background-repeat: no-repeat;
													"
												>
													<div class="relative h-full w-full overflow-hidden">
														<div
															class="relative h-full w-full px-6 py-6 flex items-center"
														>
															<div class="relative w-auto h-auto">
																<div class="relative h-auto w-auto grid gap-6">
																	<div
																		class="relative h-auto w-auto flex items-center gap-4 group cursor-pointer"
																	>
																		<div
																			class="relative h-[50px] w-[50px] rounded-full flex items-center justify-center cursor-pointer bg-white text-purple-500 duration-300"
																		>
																			<svg
																				width="17"
																				height="17"
																				viewBox="0 0 24 24"
																				fill="none"
																				stroke="currentColor"
																				stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																			>
																				<path
																					d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
																				></path>
																				<polyline
																					points="22,6 12,13 2,6"
																				></polyline>
																			</svg>
																		</div>
																		<div
																			class="relative h-auto w-auto grid gap-1 text-white opacity-100 duration-300"
																		>
																			<div
																				class="relative h-auto w-auto text-md font-light"
																			>
																				Email
																			</div>
																			<div
																				class="relative h-auto w-auto text-xs font-light"
																			>
																				Deecoodeer@gmail.com
																			</div>
																		</div>
																	</div>
																	<div
																		class="relative h-auto w-auto flex items-center gap-4 group cursor-pointer"
																	>
																		<div
																			class="relative h-[50px] w-[50px] rounded-full flex items-center justify-center cursor-pointer bg-white text-purple-500 duration-300"
																		>
																			<svg
																				width="17"
																				height="17"
																				viewBox="0 0 24 24"
																				fill="none"
																				stroke="currentColor"
																				stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																			>
																				<path
																					d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
																				></path>
																			</svg>
																		</div>
																		<div
																			class="relative h-auto w-auto grid gap-1 text-white opacity-100 duration-300"
																		>
																			<div
																				class="relative h-auto w-auto text-md font-light"
																			>
																				Phone
																			</div>
																			<div
																				class="relative h-auto w-auto text-xs font-light"
																			>
																				9816923641
																			</div>
																		</div>
																	</div>
																	<div
																		class="relative h-auto w-auto flex items-center gap-4 group cursor-pointer"
																	>
																		<div
																			class="relative h-[50px] w-[50px] rounded-full flex items-center justify-center cursor-pointer bg-white text-purple-500 duration-300"
																		>
																			<svg
																				width="17"
																				height="17"
																				viewBox="0 0 24 24"
																				fill="none"
																				stroke="currentColor"
																				stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																			>
																				<path
																					d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"
																				></path>
																				<circle cx="12" cy="10" r="3"></circle>
																			</svg>
																		</div>
																		<div
																			class="relative h-auto w-auto grid gap-1 text-white opacity-100 duration-300"
																		>
																			<div
																				class="relative h-auto w-auto text-md font-light"
																			>
																				Location
																			</div>
																			<div
																				class="relative h-auto w-auto text-xs font-light"
																			>
																				Asia/Nepal/Jhapa/Birtamode/Beldagi
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div
									class="relative h-auto w-full xl:hidden lg:hidden md:hidden block"
								>
									<div
										class="relative h-auto w-full flex items-center flex-wrap gap-8"
									>
										<div class="relative h-auto w-[250px] flex items-center">
											<div
												class="relative h-[50px] w-[50px] flex items-center justify-center text-purple-500 bg-gray-100 rounded-md"
											>
												<svg
													width="24"
													height="24"
													viewBox="0 0 24 24"
													fill="none"
													stroke="currentColor"
													stroke-width="2"
													stroke-linecap="round"
													stroke-linejoin="round"
												>
													<path
														d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
													></path>
													<polyline points="22,6 12,13 2,6"></polyline>
												</svg>
											</div>
											<div class="relative h-auto w-[calc(100%-50px)] px-4">
												<div class="relative h-auto w-auto grid gap-1">
													<div
														class="relative h-auto text-md font-extrabold text-gray-800"
													>
														Email
													</div>
													<div
														class="relative h-auto text-sm font-light text-gray-600"
													>
														Deecoodeer@gmail.com
													</div>
												</div>
											</div>
										</div>
										<div class="relative h-auto w-[250px] flex items-center">
											<div
												class="relative h-[50px] w-[50px] flex items-center justify-center text-purple-500 bg-gray-100 rounded-md"
											>
												<svg
													width="24"
													height="24"
													viewBox="0 0 24 24"
													fill="none"
													stroke="currentColor"
													stroke-width="2"
													stroke-linecap="round"
													stroke-linejoin="round"
												>
													<path
														d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
													></path>
												</svg>
											</div>
											<div class="relative h-auto w-[calc(100%-50px)] px-4">
												<div class="relative h-auto w-auto grid gap-1">
													<div
														class="relative h-auto text-md font-extrabold text-gray-800"
													>
														Phone
													</div>
													<div
														class="relative h-auto text-sm font-light text-gray-600"
													>
														9816923641
													</div>
												</div>
											</div>
										</div>
										<div class="relative h-auto w-[250px] flex items-center">
											<div
												class="relative h-[50px] w-[50px] flex items-center justify-center text-purple-500 bg-gray-100 rounded-md"
											>
												<svg
													width="24"
													height="24"
													viewBox="0 0 24 24"
													fill="none"
													stroke="currentColor"
													stroke-width="2"
													stroke-linecap="round"
													stroke-linejoin="round"
												>
													<path
														d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"
													></path>
													<circle cx="12" cy="10" r="3"></circle>
												</svg>
											</div>
											<div class="relative h-auto w-[calc(100%-50px)] px-4">
												<div class="relative h-auto w-auto grid gap-1">
													<div
														class="relative h-auto text-md font-extrabold text-gray-800"
													>
														Location
													</div>
													<div
														class="relative h-auto text-sm font-light text-gray-600"
													>
														Asia/Nepal/Jhapa/Birtamode/Beldagi
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- footer -->
								<div
									class="relative h-auto w-full border-t py-8 mt-16"
									id="footer"
								>
									<div
										class="relative h-auto w-full flex items-center justify-between"
									>
										<div class="relative">
											<div class="relative text-sm font-light text-gray-600">
												© 2022 SUjan. All rights reserved.
											</div>
										</div>
										<div class="relative">
											<div class="relative text-sm font-light text-gray-600">
												Privacy & Policy
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script>
		let contents = document.querySelectorAll(".content");
		let maincontainer = document.querySelector(".maincontainer");
		let scrollBox = document.querySelector(".scrollBox");
		let imgContainer = document.querySelector(".imgContainer");
		let textArea = document.querySelector(".textArea");
		let levelOfTextArea = document.querySelector(".levelOfTextArea");
		let navBox = document.querySelector(".navBox");
		let navigationBtn = document.querySelector(".navigationBtn");
		let inputFields = document.querySelectorAll(".inputField");
		let navBoxLinkBtns = document.querySelectorAll(".navBoxLinkBtns");
		let submitBtn = document.querySelector(".submitBtn");
		let contentContainer = document.querySelector(".contentContainer");
		let goUp = document.querySelector(".goUp");
		let goDown = document.querySelector(".goDown");
		let contactContainer = document.querySelector(".contactContainer");
		let contactLinkBtn = document.querySelector(".contactLinkBtn");
		let log = console.log;

		let hide = false;

		let count = 0;

		scrollBox.addEventListener("scroll", () => {
			arrowController();
			contactBtnAnimation();
		});

		function contactBtnAnimation() {
			// log(contentContainer.getBoundingClientRect().y);
			if (
				contactContainer.getBoundingClientRect().y <= screen.availHeight / 2 &&
				contactContainer.getBoundingClientRect().y >= -screen.availHeight / 2
			) {
				setTimeout(() => {
					contactLinkBtn.classList.add("bg-purple-500");
					contactLinkBtn.classList.remove("border");
					contactLinkBtn.classList.add("text-white");
					contactLinkBtn.classList.remove("text-purple-500");
					setTimeout(() => {
						contactLinkBtn.style.transform = "scale(1.1)";
						setTimeout(() => {
							contactLinkBtn.style.transform = "scale(1)";
						}, 100);
					}, 10);
				}, []);
			} else {
				setTimeout(() => {
					contactLinkBtn.classList.remove("bg-purple-500");
					contactLinkBtn.classList.add("border");
					contactLinkBtn.classList.remove("text-white");
					contactLinkBtn.classList.add("text-purple-500");
				}, []);
			}
		}

		function arrowController() {
			if (contentContainer.getBoundingClientRect().y <= 0) {
				goUp.style.display = "none";
				goDown.style.display = "block";
			} else {
				goDown.style.display = "none";
				goUp.style.display = "block";
			}
		}

		inputFields.forEach((elem, ind) => {
			elem.addEventListener("keyup", () => {
				checkFields();
			});
		});

		function checkFields() {
			inputFields.forEach((elem, ind) => {
				if (elem.value != "") {
					count++;
				}
			});
			if (count == 3) {
				submitBtn.classList.add("bg-purple-500");
				submitBtn.classList.remove("bg-gray-100");
				submitBtn.classList.add("text-white");
				submitBtn.style.pointerEvents = "auto";
			} else {
				submitBtn.classList.remove("bg-purple-500");
				submitBtn.classList.add("bg-gray-100");
				submitBtn.classList.remove("text-white");
				submitBtn.style.pointerEvents = "none";
			}
			count = 0;
		}

		navBoxLinkBtns.forEach((elem, ind) => {
			elem.addEventListener("click", () => {
				hideOrShowNavBox();
			});
		});

		navigationBtn.addEventListener("click", () => {
			hideOrShowNavBox();
		});
		function hideOrShowNavBox() {
			navPos();
			if (hide == true) {
				hide = false;
				navBox.style.display = "block";
				setTimeout(() => {
					navBox.style.transform = "translateY(0px)";
					navBox.style.opacity = "1";
				}, []);
			} else {
				hide = true;
				navBox.style.opacity = "0";
				setTimeout(() => {
					navBox.style.display = "none";
					navBox.style.transform = "translateY(-10px)";
				}, []);
				navBox.style.transform = "translateY(10px)";
			}
		}

		function navPos() {
			let x =
				navigationBtn.getBoundingClientRect().x +
				navigationBtn.getBoundingClientRect().width -
				200;
			let y =
				navigationBtn.getBoundingClientRect().y +
				navigationBtn.getBoundingClientRect().height +
				20;
			navBox.style.top = y + "px";
			navBox.style.left = x + "px";
		}

		textArea.addEventListener("keyup", () => {
			controlLevel();
		});
		function controlLevel() {
			if (textArea.value != "") {
				levelOfTextArea.style.display = "none";
			} else {
				levelOfTextArea.style.display = "block";
			}
		}

		imgContainer.style.width = imgContainer.style.height;
		window.onresize = () => {
			setW();
		};
		function setW() {
			contents.forEach((elem, ind) => {
				elem.addEventListener("click", () => {
					if (!hide) {
						hideOrShowNavBox();
					}
				});
				elem.style.height = screen.availHeight - 100 + "px";
			});
		}
		window.onload = () => {
			setW();
			controlLevel();
			hideOrShowNavBox();
			checkFields();
			arrowController();
		};
	</script>
</html>
