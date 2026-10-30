# Type af indgreb (akut/elektiv) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Type af indgreb (akut/elektiv)**

## ValueSet: Type af indgreb (akut/elektiv) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IndgrebPrioritetAkutElektiv | *Version*:2.27.1 |
| Active as of 2022-07-20 | *Computable Name*:IndgrebPrioritetAkutElektiv |

 
Type af indgreb (akut/elektiv) 

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
  "id" : "IndgrebPrioritetAkutElektiv",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IndgrebPrioritetAkutElektiv",
  "version" : "2.27.1",
  "name" : "IndgrebPrioritetAkutElektiv",
  "title" : "Type af indgreb (akut/elektiv)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Type af indgreb (akut/elektiv)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Priority",
      "concept" : [{
        "code" : "elective",
        "display" : "Elektiv"
      },
      {
        "code" : "emergency",
        "display" : "Akut/Subakut"
      }]
    }]
  }
}

```
