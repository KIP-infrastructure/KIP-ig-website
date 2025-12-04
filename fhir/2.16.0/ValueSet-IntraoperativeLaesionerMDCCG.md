# Intraoperative læsioner - Mænd (DCCG) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Intraoperative læsioner - Mænd (DCCG)**

## ValueSet: Intraoperative læsioner - Mænd (DCCG) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IntraoperativeLaesionerMDCCG | *Version*:2.16.0 |
| Active as of 2022-11-10 | *Computable Name*:IntraoperativeLaesionerMDCCG |

 
Intraoperative læsioner - Mænd (DCCG) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 12 concepts

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
  "id" : "IntraoperativeLaesionerMDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IntraoperativeLaesionerMDCCG",
  "version" : "2.16.0",
  "name" : "IntraoperativeLaesionerMDCCG",
  "title" : "Intraoperative læsioner - Mænd (DCCG)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-11-10T00:00:00+02:00",
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
  "description" : "Intraoperative læsioner - Mænd (DCCG)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "T000703",
            "display" : "Duodenum T000703"
          },
          {
            "code" : "T000627",
            "display" : "Galdeblære T000627"
          },
          {
            "code" : "T000725",
            "display" : "Kolon T000725"
          },
          {
            "code" : "T000607",
            "display" : "Lever T000607"
          },
          {
            "code" : "T000132",
            "display" : "Milt T000132"
          },
          {
            "code" : "T000638",
            "display" : "Pancreas T000638"
          },
          {
            "code" : "T000695",
            "display" : "Tyndtarm eksklusive duodenum T000695"
          },
          {
            "code" : "T000803",
            "display" : "Ureter T000803"
          },
          {
            "code" : "T000824",
            "display" : "Urethra T000824"
          },
          {
            "code" : "T000812",
            "display" : "Urinblære T000812"
          },
          {
            "code" : "T000670",
            "display" : "Ventrikel T000670"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Andet"
          }
        ]
      }
    ]
  }
}

```
