# Sygdomslokalisation er kun nodalt (LYFO) - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomslokalisation er kun nodalt (LYFO)**

## ValueSet: Sygdomslokalisation er kun nodalt (LYFO) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LocationNodal | *Version*:2.13.0 |
| Active as of 2025-07-10 | *Computable Name*:LocationNodal |

 
Sygdomslokalisation i lymfe områder er kun nodalt (LYFO) 

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
  "id" : "LocationNodal",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LocationNodal",
  "version" : "2.13.0",
  "name" : "LocationNodal",
  "title" : "Sygdomslokalisation er kun nodalt (LYFO)",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-07-10T00:00:00+02:00",
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
  "description" : "Sygdomslokalisation i lymfe områder er kun nodalt (LYFO)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "T000647",
            "display" : "Rhinopharynx"
          },
          {
            "code" : "T000653",
            "display" : "Waldeyers svælgring inkl. tonsiller"
          },
          {
            "code" : "T001184",
            "display" : "Halsregion inkl. periclavilulære glandler"
          },
          {
            "code" : "T000654",
            "display" : "Waldeyers svælgring"
          },
          {
            "code" : "T000657",
            "display" : "Tonsilla Palatina"
          },
          {
            "code" : "T000146",
            "display" : "Hals, Øvre"
          },
          {
            "code" : "T000148",
            "display" : "Supraclaviculært"
          },
          {
            "code" : "T000154",
            "display" : "Infraclaviculært"
          },
          {
            "code" : "T000174",
            "display" : "Axiller"
          },
          {
            "code" : "T000165",
            "display" : "Mediastinum og lunge hili"
          },
          {
            "code" : "T000166",
            "display" : "Intraabdominale glandler"
          },
          {
            "code" : "T001210",
            "display" : "Mediastinum"
          },
          {
            "code" : "T000400",
            "display" : "Lungehili"
          },
          {
            "code" : "T001227",
            "display" : "Retroperitoneum"
          },
          {
            "code" : "T000132",
            "display" : "Milt"
          },
          {
            "code" : "T000177",
            "display" : "Femoral regionen/Lyske"
          },
          {
            "code" : "T000702",
            "display" : "Tarmkrøs"
          },
          {
            "code" : "T001231",
            "display" : "Pelvis"
          }
        ]
      }
    ]
  }
}

```
