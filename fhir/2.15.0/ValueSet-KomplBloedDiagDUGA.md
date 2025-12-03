# Komplikationer pga. blødning - Diagnosekoder (DUGA) - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer pga. blødning - Diagnosekoder (DUGA)**

## ValueSet: Komplikationer pga. blødning - Diagnosekoder (DUGA) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplBloedDiagDUGA | *Version*:2.15.0 |
| Active as of 2024-02-21 | *Computable Name*:KomplBloedDiagDUGA |

 
Komplikationer pga. blødning - Diagnosekoder (DUGA) 

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
  "id" : "KomplBloedDiagDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplBloedDiagDUGA",
  "version" : "2.15.0",
  "name" : "KomplBloedDiagDUGA",
  "title" : "Komplikationer pga. blødning - Diagnosekoder (DUGA)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-02-21T00:00:00+02:00",
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
  "description" : "Komplikationer pga. blødning - Diagnosekoder (DUGA)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
        "concept" : [
          {
            "code" : "DT810G",
            "display" : "DT810G: Postoperativ blødning UNS"
          },
          {
            "code" : "DT810H",
            "display" : "DT810H: Postoperativt hæmatom UNS"
          },
          {
            "code" : "DT818F",
            "display" : "DT818F: Peroperativ blødning UNS"
          }
        ]
      }
    ]
  }
}

```
