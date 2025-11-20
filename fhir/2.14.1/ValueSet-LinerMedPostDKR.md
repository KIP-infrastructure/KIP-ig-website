# Liner komponent med Post (DKR) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Liner komponent med Post (DKR)**

## ValueSet: Liner komponent med Post (DKR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LinerMedPostDKR | *Version*:2.14.1 |
| Active as of 2023-12-18 | *Computable Name*:LinerMedPostDKR |

 
Liner komponent med Post (DKR) 

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
  "id" : "LinerMedPostDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LinerMedPostDKR",
  "version" : "2.14.1",
  "name" : "LinerMedPostDKR",
  "title" : "Liner komponent med Post (DKR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2023-12-18T00:00:00+02:00",
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
  "description" : "Liner komponent med Post (DKR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/KomponentLiner",
        "concept" : [
          {
            "code" : "ps_traditional_ap",
            "display" : "PS (traditionel PS post med AP constraint)"
          },
          {
            "code" : "ps_rotating",
            "display" : "PS med roterende platform"
          },
          {
            "code" : "ckk_VV",
            "display" : "CCK (Constrained Condylar - Post med VV og rotations constraint)"
          },
          {
            "code" : "ckk_rotating",
            "display" : "CCK med roterende platform"
          },
          {
            "code" : "bi_cs",
            "display" : "Bi-CS: bicruciate substituting (forreste og bageste korsbånd ofres og substitueres med post og 2 cams)"
          }
        ]
      }
    ]
  }
}

```
