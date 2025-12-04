# Sygdomslokalisation er kun ekstranodalt, kvinder (LYFO) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomslokalisation er kun ekstranodalt, kvinder (LYFO)**

## ValueSet: Sygdomslokalisation er kun ekstranodalt, kvinder (LYFO) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LocationExtranodalFemale | *Version*:2.16.0 |
| Active as of 2023-03-15 | *Computable Name*:LocationExtranodalFemale |

 
Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en kvinde (LYFO) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 31 concepts

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
  "id" : "LocationExtranodalFemale",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LocationExtranodalFemale",
  "version" : "2.16.0",
  "name" : "LocationExtranodalFemale",
  "title" : "Sygdomslokalisation er kun ekstranodalt, kvinder (LYFO)",
  "status" : "active",
  "experimental" : true,
  "date" : "2023-03-15T00:00:00+02:00",
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
  "description" : "Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en kvinde (LYFO)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "T001182",
            "display" : "Orbita"
          },
          {
            "code" : "T001127",
            "display" : "Øje"
          },
          {
            "code" : "T001145",
            "display" : "Tårekirtel"
          },
          {
            "code" : "T000352",
            "display" : "Bihuler"
          },
          {
            "code" : "T000347",
            "display" : "Cavum nasi"
          },
          {
            "code" : "T000569",
            "display" : "Mundhule i øvrigt"
          },
          {
            "code" : "T000600",
            "display" : "Spytkirtler"
          },
          {
            "code" : "T001022",
            "display" : "Gl. thyroidea"
          },
          {
            "code" : "T000438",
            "display" : "Cor"
          },
          {
            "code" : "T000094",
            "display" : "Mamma"
          },
          {
            "code" : "T000398",
            "display" : "Lunge"
          },
          {
            "code" : "T000670",
            "display" : "Ventrikel"
          },
          {
            "code" : "T000695",
            "display" : "Tyndtarm"
          },
          {
            "code" : "T000725",
            "display" : "Tyktarm"
          },
          {
            "code" : "T000638",
            "display" : "Pancreas"
          },
          {
            "code" : "T000773",
            "display" : "Nyrer"
          },
          {
            "code" : "T000607",
            "display" : "Lever"
          },
          {
            "code" : "T000812",
            "display" : "Urinblære"
          },
          {
            "code" : "T000948",
            "display" : "Ovarier"
          },
          {
            "code" : "T000892",
            "display" : "Vagina"
          },
          {
            "code" : "T000898",
            "display" : "Uterus"
          },
          {
            "code" : "T000010",
            "display" : "Hud"
          },
          {
            "code" : "T000298",
            "display" : "Muskulatur"
          },
          {
            "code" : "T000224",
            "display" : "Knogler"
          },
          {
            "code" : "T000113",
            "display" : "Knoglemarv"
          },
          {
            "code" : "T001039",
            "display" : "CNS"
          },
          {
            "code" : "T001057",
            "display" : "Leptomeninges"
          },
          {
            "code" : "T000492",
            "display" : "Intravaskulært"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
        "concept" : [
          {
            "code" : "ascites_lymfom",
            "display" : "Ascites med lymfomceller"
          },
          {
            "code" : "perikardieeksudat_lymfom",
            "display" : "Perikardieeksudat med lymfomceller"
          },
          {
            "code" : "pleuraeksudat_lymfom",
            "display" : "Pleuraeksudat med lymfomceller"
          }
        ]
      }
    ]
  }
}

```
