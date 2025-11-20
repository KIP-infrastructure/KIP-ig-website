# Årsag til anden/aflastende procedure colorectal cancer - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Årsag til anden/aflastende procedure colorectal cancer**

## ValueSet: Årsag til anden/aflastende procedure colorectal cancer (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AarsagTilProcedureDCCG | *Version*:2.14.1 |
| Active as of 2022-10-04 | *Computable Name*:AarsagTilProcedureDCCG |

 
Årsag til anden/aflastende procedure colorectal cancer 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 5 concepts

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
  "id" : "AarsagTilProcedureDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AarsagTilProcedureDCCG",
  "version" : "2.14.1",
  "name" : "AarsagTilProcedureDCCG",
  "title" : "Årsag til anden/aflastende procedure colorectal cancer",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-10-04T00:00:00+02:00",
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
  "description" : "Årsag til anden/aflastende procedure colorectal cancer",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureReasons",
        "concept" : [
          {
            "code" : "patients_wish",
            "display" : "Patientønske"
          },
          {
            "code" : "non_resectable",
            "display" : "Tumor ikke resektabel"
          },
          {
            "code" : "non_operable",
            "display" : "Patienten er non-operabel"
          },
          {
            "code" : "disseminated_disease",
            "display" : "Dissemineret tarmkræft"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Anden begrundelse"
          }
        ]
      }
    ]
  }
}

```
