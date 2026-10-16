# Medicin givet ved hjertestop - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medicin givet ved hjertestop**

## ValueSet: Medicin givet ved hjertestop 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MedicinDANARREST | *Version*:2.27.0 |
| Active as of 2022-06-29 | *Computable Name*:MedicinDANARREST |

 
Mediciin givet ved behandling i DANARREST specialet 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "MedicinDANARREST",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MedicinDANARREST",
  "version" : "2.27.0",
  "name" : "MedicinDANARREST",
  "title" : "Medicin givet ved hjertestop",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Mediciin givet ved behandling i DANARREST specialet",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicinDANARREST",
      "concept" : [{
        "code" : "adrenalin",
        "display" : "Adrenalin"
      },
      {
        "code" : "amiodaron",
        "display" : "Amiodaron"
      }]
    }]
  }
}

```
