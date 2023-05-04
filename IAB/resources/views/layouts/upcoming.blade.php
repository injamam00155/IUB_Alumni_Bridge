
<div class="mt-5">
    <h3 class="upcoming">Upcoming Events</h3>
    <div class="row g-4 mt-3">
      <div class="col-12">
        <a href="event-details.html" style="text-decoration: none">
          <div class="card h-100 w-75 border-0">
            <img
              src="{{$event->eventImageURL}}"
              class="card-img-top"
              alt="{{$event->eventTitle}} poster"
            />
            <div class="card-body">
              <h5 class="card-title">{{$event->eventTitle}}</h5>
              <p class="card-text">
                Event Date:
                <span class="text-muted"
                  >{{$event->eventStartDate}} - {{$event->eventEndDate}}</span
                >
              </p>
              <p class="card-text">
                Event Time:
                <span class="text-muted">{{$event->eventStartTime}} - {{$event->eventEndTime}}</span>
              </p>
              <p class="card-text">
                Event Location:
                <span class="text-muted"
                  >{{$event->eventLocation}}</span
                >
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
</div>