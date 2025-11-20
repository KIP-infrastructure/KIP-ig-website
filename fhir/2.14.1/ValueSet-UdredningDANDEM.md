# Udredning (DANDEM) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Udredning (DANDEM)**

## ValueSet: Udredning (DANDEM) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/UdredningDANDEM | *Version*:2.14.1 |
| Active as of 2022-07-19 | *Computable Name*:UdredningDANDEM |

 
Udredning (DANDEM) 

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
  "id" : "UdredningDANDEM",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/UdredningDANDEM",
  "version" : "2.14.1",
  "name" : "UdredningDANDEM",
  "title" : "Udredning (DANDEM)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-19T00:00:00+02:00",
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
  "description" : "Udredning (DANDEM)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AssessmentType",
        "concept" : [
          {
            "code" : "primary_dementia_assessment",
            "display" : "Primær demensudredning, henvist direkte"
          },
          {
            "code" : "second_opinion",
            "display" : "Second opinion"
          },
          {
            "code" : "referred_again_behavioral_problems",
            "display" : "Genhenvist pga. adfærdsforstyrrelser og har sikker diagnose"
          },
          {
            "code" : "referred_again_dementia_treatment",
            "display" : "Genhenvist pga. demensbehandling og har en sikker diagnose"
          },
          {
            "code" : "revisited_primary_assessment",
            "display" : "Omvisiteret fritvalgspatient til primær udredning"
          },
          {
            "code" : "no_wish_for_assessment",
            "display" : "Patient ønsker ikke yderligere undersøgelser"
          }
        ]
      }
    ]
  }
}

```
