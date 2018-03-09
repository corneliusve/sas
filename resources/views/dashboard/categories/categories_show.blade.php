@extends('layouts.dashboard')

@section('navigation')

	@include('dashboard.navigations.categories_nav')

@endsection

@section('content')

      <h2 class="is-size-3 alternate-heading">Hoofd categorie: <span class="alternate-heading-light">{{ $categorie->title }}</span></h2>

      <div class="sub-categorie-wrapper">

		<h2 class="is-size-5 alternate-heading m-t-25 alternate-heading-light">Sub categorieën</h2>

         <ul>
			 @foreach($subcats as $subcat)

				<li>

					<div class="label-categorie">
						<p class="subcat-title">{{ $subcat->title }}</p>
						<div class="icons">


							<span class="icon is-small m-r-40">
								<a href=""><img src="{{ asset('images/icons/edit-white.svg') }}" alt=""></a>
							</span>
							<span class="icon is-small">
								<a href=""><img src="{{ asset('images/icons/trash-white.svg') }}" alt=""></a>
							</span>
						</div>
					</div>

					<div class="editable">
					   <form action="#" method="POST">
						  {{ csrf_field() }}
						  {{ method_field('PUT') }}
						  <table>
							 <tbody>
								<tr>
								   <td>
									  <div class="field">
										 <div class="control">
											<input type="text" class="input" value="{{ $subcat->title }}">
										 </div>
									  </div>
								   </td>
								   <td>
									  <div class="field m-l-30">
										 <div class="control">
											<button class="button second-button is-small">update</button>
										 </div>
									  </div>
								   </td>

								</tr>
							 </tbody>
						  </table>
					   </form>
					</div>
				</li>

			 @endforeach
            <li class="m-t-35">
               <form action="{{ route('subcat.store', ['slug' => $categorie->slug]) }}" method="POST">
                  {{ csrf_field() }}
                  <table>
                     <tbody>
                        <tr>
                           <td>
                              <div class="field">
                                 <div class="control">
                                    <input type="text" name="title" class="input">
                                 </div>
                              </div>
                           </td>
                           <td>
                              <div class="field m-l-30">
                                 <div class="control">
                                    <button class="button second-button is-small m-t-10" type="submit">Voeg toe</button>
                                 </div>
                              </div>
                           </td>

                        </tr>
                     </tbody>
                  </table>
               </form>
            </li>


         </ul>

      </div>

@endsection
