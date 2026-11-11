# Placering af brusklæsioner (DKRR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Placering af brusklæsioner (DKRR)**

## ValueSet: Placering af brusklæsioner (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BrusklaesionPlaceringDKRR | *Version*:2.27.3 |
| Active as of 2023-03-23 | *Computable Name*:BrusklaesionPlaceringDKRR |

 
Placering af brusklæsioner (DKRR) 

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
  "id" : "BrusklaesionPlaceringDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BrusklaesionPlaceringDKRR",
  "version" : "2.27.3",
  "name" : "BrusklaesionPlaceringDKRR",
  "title" : "Placering af brusklæsioner (DKRR)",
  "status" : "active",
  "date" : "2023-03-23T00:00:00+02:00",
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
  "description" : "Placering af brusklæsioner (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnatomicalLocations",
      "concept" : [{
        "code" : "Patella_medial",
        "display" : "Patella (mediale facet)"
      },
      {
        "code" : "Patella_lateral",
        "display" : "Patella (laterale facet)"
      },
      {
        "code" : "Trochlea_femoris",
        "display" : "Trochlea femoris"
      },
      {
        "code" : "Med_femur_kondyl",
        "display" : "Med. femur kondyl"
      },
      {
        "code" : "Med_tibia_plateau",
        "display" : "Med. tibia plateau"
      },
      {
        "code" : "Lat_femur_kondyl",
        "display" : "Lat. femur kondyl"
      },
      {
        "code" : "Lat_tibia_plateau",
        "display" : "Lat. tibia plateau"
      }]
    }]
  }
}

```
