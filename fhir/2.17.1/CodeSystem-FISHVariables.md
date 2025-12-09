# FISH variables; test - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FISH variables; test**

## CodeSystem: FISH variables; test 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/FISHVariables | *Version*:2.17.1 |
| Active as of 2025-02-21 | *Computable Name*:FISHVariables |

 
FISH variables; test 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FISHProcedure](ValueSet-FISHProcedure.md)
* [FISHResult](ValueSet-FISHResult.md)
* [FISHResult202502](ValueSet-FISHResult202502.md)
* [FISHSamples](ValueSet-FISHSamples.md)
* [FISHSamples202502](ValueSet-FISHSamples202502.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "FISHVariables",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/FISHVariables",
  "version" : "2.17.1",
  "name" : "FISHVariables",
  "title" : "FISH variables; test",
  "status" : "active",
  "date" : "2025-02-21T00:00:00+02:00",
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
  "description" : "FISH variables; test",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 14,
  "concept" : [
    {
      "code" : "plasma_cell_identifikation_unspecific",
      "display" : "Plasma cell identification",
      "definition" : "Plasma cell identification, unspecific / Plasmacelleidentifikation, uspecifik",
      "concept" : [
        {
          "code" : "cd138_sort",
          "display" : "CD138 sort",
          "definition" : "CD138 sort"
        },
        {
          "code" : "antibodies",
          "display" : "Antibodies",
          "definition" : "Antibodies / Antistof"
        }
      ]
    },
    {
      "code" : "igh_fgfr3",
      "display" : "t(4;14)/IGH-FGFR3",
      "definition" : "t(4;14)/IGH-FGFR3"
    },
    {
      "code" : "igh_ccnd1",
      "display" : "t(11;14)/IGH-CCND1",
      "definition" : "t(11;14)/IGH-CCND1"
    },
    {
      "code" : "igh_mbf",
      "display" : "t(14;16)/IGH-MBF",
      "definition" : "t(14;16)/IGH-MBF"
    },
    {
      "code" : "igh_mafb",
      "display" : "t(14;20)/IGH-MAFB",
      "definition" : "t(14;20)/IGH-MAFB"
    },
    {
      "code" : "igh_split_signal",
      "display" : "IgH split signal",
      "definition" : "IgH split signal"
    },
    {
      "code" : "13q_deletion",
      "display" : "13q deletion",
      "definition" : "13q deletion"
    },
    {
      "code" : "tp53_deletion",
      "display" : "TP53 deletion",
      "definition" : "TP53 deletion"
    },
    {
      "code" : "1q21",
      "display" : "1q21 amplifikation",
      "definition" : "1q21 amplifikation"
    },
    {
      "code" : "11q22",
      "display" : "11q22/ATM amplifikation",
      "definition" : "11q22/ATM amplifikation"
    },
    {
      "code" : "1q21gain",
      "display" : "1q21 gain (3 spot)",
      "definition" : "1q21 gain (3 spot)"
    },
    {
      "code" : "1qdeletion",
      "display" : "1p deletion",
      "definition" : "1p deletion"
    }
  ]
}

```
