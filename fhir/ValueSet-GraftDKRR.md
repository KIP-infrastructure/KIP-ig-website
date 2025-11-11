# Graft (DKRR) - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Graft (DKRR)**

## ValueSet: Graft (DKRR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/GraftDKRR | *Version*:2.13.0 |
| Active as of 2022-09-19 | *Computable Name*:GraftDKRR |

 
Graft (DKRR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 16 concepts

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
  "id" : "GraftDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/GraftDKRR",
  "version" : "2.13.0",
  "name" : "GraftDKRR",
  "title" : "Graft (DKRR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Graft (DKRR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GraftCruciateLigaments",
        "concept" : [
          {
            "code" : "bach-allo",
            "display" : "BACH-Allo"
          },
          {
            "code" : "bptb",
            "display" : "BPTB"
          },
          {
            "code" : "bptb-allo",
            "display" : "BPTB-Allo"
          },
          {
            "code" : "bqt",
            "display" : "BQT"
          },
          {
            "code" : "bqt-allo",
            "display" : "BQT-Allo"
          },
          {
            "code" : "direct_suture",
            "display" : "Direkte sutur"
          },
          {
            "code" : "double-bundle_bqt",
            "display" : "Double-bundle BQT"
          },
          {
            "code" : "double-bundle_st",
            "display" : "Double-bundle ST"
          },
          {
            "code" : "qt_without_bone_block",
            "display" : "QT uden knogleklods"
          },
          {
            "code" : "st_double",
            "display" : "ST - Double"
          },
          {
            "code" : "st_quadro",
            "display" : "ST - Quadro"
          },
          {
            "code" : "st_triple",
            "display" : "ST - Triple"
          },
          {
            "code" : "st/gr",
            "display" : "ST/GR"
          },
          {
            "code" : "st/gr_allo",
            "display" : "ST/GR allo"
          },
          {
            "code" : "synthetic",
            "display" : "Syntetisk graft"
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
