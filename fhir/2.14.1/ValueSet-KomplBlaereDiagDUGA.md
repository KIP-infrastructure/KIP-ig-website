# Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA)**

## ValueSet: Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplBlaereDiagDUGA | *Version*:2.14.1 |
| Active as of 2024-02-21 | *Computable Name*:KomplBlaereDiagDUGA |

 
Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA) 

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
  "id" : "KomplBlaereDiagDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplBlaereDiagDUGA",
  "version" : "2.14.1",
  "name" : "KomplBlaereDiagDUGA",
  "title" : "Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA)",
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
  "description" : "Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
        "concept" : [
          {
            "code" : "DR339D",
            "display" : "DR339D: Residualurin"
          },
          {
            "code" : "DR391",
            "display" : "DR391: Vandladningsbesvær UNS"
          }
        ]
      }
    ]
  }
}

```
