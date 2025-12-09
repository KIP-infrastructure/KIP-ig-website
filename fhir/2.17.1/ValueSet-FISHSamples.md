# Anvendte FISH prober - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anvendte FISH prober**

## ValueSet: Anvendte FISH prober (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FISHSamples | *Version*:2.17.1 |
| Active as of 2022-07-15 | *Computable Name*:FISHSamples |

 
Anvendte FISH prober 

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
  "id" : "FISHSamples",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FISHSamples",
  "version" : "2.17.1",
  "name" : "FISHSamples",
  "title" : "Anvendte FISH prober",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-15T00:00:00+02:00",
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
  "description" : "Anvendte FISH prober",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/FISHVariables",
        "concept" : [
          {
            "code" : "igh_fgfr3",
            "display" : "t(4;14)/IGH-FGFR3"
          },
          {
            "code" : "igh_ccnd1",
            "display" : "t(11;14)/IGH-CCND1"
          },
          {
            "code" : "igh_mbf",
            "display" : "t(14;16)/IGH-MBF"
          },
          {
            "code" : "igh_mafb",
            "display" : "t(14;20)/IGH-MAFB"
          },
          {
            "code" : "igh_split_signal",
            "display" : "IgH split signal"
          },
          {
            "code" : "13q_deletion",
            "display" : "13q deletion"
          },
          {
            "code" : "tp53_deletion",
            "display" : "TP53 deletion"
          },
          {
            "code" : "1q21",
            "display" : "1q21 amplifikation"
          },
          {
            "code" : "11q22",
            "display" : "11q22/ATM amplifikation"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Anden IGH translokation"
          }
        ]
      }
    ]
  }
}

```
