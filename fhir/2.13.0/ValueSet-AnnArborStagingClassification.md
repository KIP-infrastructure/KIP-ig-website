# Ann Arbor gradering klassifikation - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ann Arbor gradering klassifikation**

## ValueSet: Ann Arbor gradering klassifikation (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnnArborStagingClassification | *Version*:2.13.0 |
| Active as of 2022-07-12 | *Computable Name*:AnnArborStagingClassification |

 
Ann Arbor er en gradering klassifikation til Hodgkins desease 

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
  "id" : "AnnArborStagingClassification",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnnArborStagingClassification",
  "version" : "2.13.0",
  "name" : "AnnArborStagingClassification",
  "title" : "Ann Arbor gradering klassifikation",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Ann Arbor er en gradering klassifikation til Hodgkins desease",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnnArborStagingClassification",
        "concept" : [
          {
            "code" : "stage_1",
            "display" : "1 (A, B el. E)"
          },
          {
            "code" : "stage_2",
            "display" : "2 (A, B el. E)"
          },
          {
            "code" : "stage_3",
            "display" : "3 (A, B el. E)"
          },
          {
            "code" : "stage_4",
            "display" : "4 (A, B el. E)"
          }
        ]
      }
    ]
  }
}

```
