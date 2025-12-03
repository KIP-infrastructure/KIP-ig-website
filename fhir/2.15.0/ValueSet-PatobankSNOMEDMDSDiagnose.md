# MDS diagnoser (Patobank SNOMED) - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MDS diagnoser (Patobank SNOMED)**

## ValueSet: MDS diagnoser (Patobank SNOMED) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDMDSDiagnose | *Version*:2.15.0 |
| Active as of 2022-06-08 | *Computable Name*:PatobankSNOMEDMDSDiagnose |

 
MDS diagnoser (Patobank SNOMED) 

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
  "id" : "PatobankSNOMEDMDSDiagnose",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDMDSDiagnose",
  "version" : "2.15.0",
  "name" : "PatobankSNOMEDMDSDiagnose",
  "title" : "MDS diagnoser (Patobank SNOMED)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "MDS diagnoser (Patobank SNOMED)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
        "concept" : [
          {
            "code" : "M99453",
            "display" : "Kronisk myelomonocytær leukæmi (CMML)"
          },
          {
            "code" : "M99803",
            "display" : "MDS med unilinie dysplasi"
          },
          {
            "code" : "M99823",
            "display" : "MDS med ringsideroblaster og unilinie dysplasi"
          },
          {
            "code" : "M99853",
            "display" : "MDS med multilineær dysplasi"
          },
          {
            "code" : "M99833",
            "display" : "MDS med overskud af blaster"
          },
          {
            "code" : "M99863",
            "display" : "MDS med isoleret del(5q) kromosomafvigelse"
          },
          {
            "code" : "M99893",
            "display" : "MDS - uklassificerbar"
          }
        ]
      }
    ]
  }
}

```
