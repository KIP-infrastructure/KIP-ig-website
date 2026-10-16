# Komplikationer, kirurgisk [SAH] - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer, kirurgisk [SAH]**

## ValueSet: Komplikationer, kirurgisk [SAH] 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplikationerKirurgiskSAH | *Version*:2.27.0 |
| Active as of 2022-06-08 | *Computable Name*:KomplikationerKirurgiskSAH |

 
Komplikationer i forhold til kirurgisk [SAH] 

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
  "id" : "KomplikationerKirurgiskSAH",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplikationerKirurgiskSAH",
  "version" : "2.27.0",
  "name" : "KomplikationerKirurgiskSAH",
  "title" : "Komplikationer, kirurgisk [SAH]",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "Komplikationer i forhold til kirurgisk [SAH]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "bloodvesselocclusion",
        "display" : "Aflukning af kar medførende infarkt indenfor 24 timer"
      },
      {
        "code" : "peroperativebleeding",
        "display" : "Livstruende peroperativ blødning, der ikke kan kontrolleres inden for få sekunder"
      },
      {
        "code" : "infection",
        "display" : "Sårinfektion"
      }]
    }]
  }
}

```
