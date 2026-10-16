# Perioder Måned / Kvartal - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Perioder Måned / Kvartal**

## ValueSet: Perioder Måned / Kvartal 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PerioderMK | *Version*:2.27.0 |
| Active as of 2022-11-21 | *Computable Name*:PerioderMK |

 
Perioder Måned / Kvartal 

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
  "id" : "PerioderMK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PerioderMK",
  "version" : "2.27.0",
  "name" : "PerioderMK",
  "title" : "Perioder Måned / Kvartal",
  "status" : "active",
  "date" : "2022-11-21T00:00:00+02:00",
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
  "description" : "Perioder Måned / Kvartal",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Periods",
      "concept" : [{
        "code" : "month",
        "display" : "Måned"
      },
      {
        "code" : "quarter",
        "display" : "Kvartal"
      }]
    }]
  }
}

```
