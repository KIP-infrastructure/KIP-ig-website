# NIHSS - 1a. Bevidsthedsniveau - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 1a. Bevidsthedsniveau**

## ValueSet: NIHSS - 1a. Bevidsthedsniveau (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS1aBevidsthedsniveau | *Version*:2.13.0 |
| Active as of 2022-06-24 | *Computable Name*:NIHSS1aBevidsthedsniveau |

 
The National Institute of Health Stroke Scale (NIHSS) - 1a. Bevidsthedsniveau 

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
  "id" : "NIHSS1aBevidsthedsniveau",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS1aBevidsthedsniveau",
  "version" : "2.13.0",
  "name" : "NIHSS1aBevidsthedsniveau",
  "title" : "NIHSS - 1a. Bevidsthedsniveau",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-24T00:00:00+02:00",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 1a. Bevidsthedsniveau",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS1aLOC",
        "concept" : [
          {
            "code" : "0",
            "display" : "0 = Helt vågen, reagerer naturligt"
          },
          {
            "code" : "1",
            "display" : "1 = Ikke vågen, men responderer ved mindre stimuli"
          },
          {
            "code" : "2",
            "display" : "2 = Ikke vågen, kan kun vækkes ved gentagne eller kraftige stimuli"
          },
          {
            "code" : "3",
            "display" : "3 = Koma"
          }
        ]
      }
    ]
  }
}

```
