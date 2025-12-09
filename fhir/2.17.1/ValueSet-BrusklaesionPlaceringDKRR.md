# Placering af brusklæsioner (DKRR) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Placering af brusklæsioner (DKRR)**

## ValueSet: Placering af brusklæsioner (DKRR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BrusklaesionPlaceringDKRR | *Version*:2.17.1 |
| Active as of 2023-03-23 | *Computable Name*:BrusklaesionPlaceringDKRR |

 
Placering af brusklæsioner (DKRR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "BrusklaesionPlaceringDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BrusklaesionPlaceringDKRR",
  "version" : "2.17.1",
  "name" : "BrusklaesionPlaceringDKRR",
  "title" : "Placering af brusklæsioner (DKRR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2023-03-23T00:00:00+02:00",
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
  "description" : "Placering af brusklæsioner (DKRR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnatomicalLocations",
        "concept" : [
          {
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
          }
        ]
      }
    ]
  }
}

```
