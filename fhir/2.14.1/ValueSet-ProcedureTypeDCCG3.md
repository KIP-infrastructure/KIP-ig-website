# Proceduretyper til DCCG 3 - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Proceduretyper til DCCG 3**

## ValueSet: Proceduretyper til DCCG 3 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProcedureTypeDCCG3 | *Version*:2.14.1 |
| Active as of 2022-10-11 | *Computable Name*:ProcedureTypeDCCG3 |

 
Proceduretyper til DCCG 3 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 3 concepts

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
  "id" : "ProcedureTypeDCCG3",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProcedureTypeDCCG3",
  "version" : "2.14.1",
  "name" : "ProcedureTypeDCCG3",
  "title" : "Proceduretyper til DCCG 3",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-10-11T00:00:00+02:00",
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
  "description" : "Proceduretyper til DCCG 3",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
        "concept" : [
          {
            "code" : "tme",
            "display" : "TME"
          },
          {
            "code" : "pme",
            "display" : "PME"
          }
        ]
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
        "concept" : [
          {
            "code" : "NA",
            "display" : "Ikke relevant"
          }
        ]
      }
    ]
  }
}

```
