# Sygdomslokalisation er kun ekstranodalt, mænd (LYFO) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomslokalisation er kun ekstranodalt, mænd (LYFO)**

## ValueSet: Sygdomslokalisation er kun ekstranodalt, mænd (LYFO) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LocationExtranodalMale | *Version*:2.14.1 |
| Active as of 2025-07-10 | *Computable Name*:LocationExtranodalMale |

 
Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en mand (LYFO) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 30 concepts

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
  "id" : "LocationExtranodalMale",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LocationExtranodalMale",
  "version" : "2.14.1",
  "name" : "LocationExtranodalMale",
  "title" : "Sygdomslokalisation er kun ekstranodalt, mænd (LYFO)",
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
  "description" : "Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en mand (LYFO)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "T001182",
            "display" : "Orbital incl tårekirtlen"
          },
          {
            "code" : "T001127",
            "display" : "Øjeæble inklusiv nervus opticus og corpus vitreum"
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
            "display" : "Mundhule"
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
            "display" : "Lunger"
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
            "code" : "T000706",
            "display" : "Tarm"
          },
          {
            "code" : "T000638",
            "display" : "Pankreas"
          },
          {
            "code" : "T000773",
            "display" : "Nyrer og binyrer"
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
            "code" : "T000842",
            "display" : "Testis"
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
            "display" : "Exudater med lymfom celler"
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
