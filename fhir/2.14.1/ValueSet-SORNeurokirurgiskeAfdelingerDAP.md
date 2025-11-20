# SOR: Neurokirurgiske afdelinger (DAP) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Neurokirurgiske afdelinger (DAP)**

## ValueSet: SOR: Neurokirurgiske afdelinger (DAP) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SORNeurokirurgiskeAfdelingerDAP | *Version*:2.14.1 |
| Active as of 2022-09-06 | *Computable Name*:SORNeurokirurgiskeAfdelingerDAP |

 
SOR: Neurokirurgiske afdelinger (DAP) 

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
  "id" : "SORNeurokirurgiskeAfdelingerDAP",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SORNeurokirurgiskeAfdelingerDAP",
  "version" : "2.14.1",
  "name" : "SORNeurokirurgiskeAfdelingerDAP",
  "title" : "SOR: Neurokirurgiske afdelinger (DAP)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-09-06T00:00:00+02:00",
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
  "description" : "SOR: Neurokirurgiske afdelinger (DAP)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
        "concept" : [
          {
            "code" : "239981000016003",
            "display" : "OUH, Neurokirurgisk"
          },
          {
            "code" : "252961000016000",
            "display" : "Rigshospitalet , Blegdamsvej, Neurokirurgisk"
          },
          {
            "code" : "276361000016000",
            "display" : "Aalborg, Neurokirurgisk"
          },
          {
            "code" : "440051000016002",
            "display" : "Aarhus, Hjerne- og Rygkirurgi"
          }
        ]
      }
    ]
  }
}

```
