# Medicin givet ved hjertestop - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medicin givet ved hjertestop**

## CodeSystem: Medicin givet ved hjertestop 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MedicinDANARREST | *Version*:2.13.0 |
| Active as of 2022-06-29 | *Computable Name*:MedicinDANARREST |

 
Mediciin givet ved behandling i DANARREST specialet 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedicinDANARREST](ValueSet-MedicinDANARREST.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedicinDANARREST",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicinDANARREST",
  "version" : "2.13.0",
  "name" : "MedicinDANARREST",
  "title" : "Medicin givet ved hjertestop",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Mediciin givet ved behandling i DANARREST specialet",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "adrenalin",
      "display" : "Adrenalin",
      "definition" : "Adrenalin"
    },
    {
      "code" : "amiodaron",
      "display" : "Amiodaron",
      "definition" : "Amiodaron"
    },
    {
      "code" : "ingen_D",
      "display" : "Ingen af disse",
      "definition" : "Ingen af disse"
    }
  ]
}

```
